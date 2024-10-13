<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    
    public function login()
    {
        helper(['form']);  // Form helper betöltése

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];

            if ($this->validate($rules)) {
                $model = new UserModel();
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

             
                // Felhasználó lekérdezése a felhasználónév alapján
                $user = $model->where('username', $username)->first();

                // Jelszó ellenőrzése
                if ($user && password_verify($password, $user['password'])) {
                    if ($user['status'] === 'fuggo') {

                        session()->set([
                            'user_id' => $user['id'],
                            'isLoggedIn' => true,
                            'forcePasswordChange' => true  // Jelszóváltoztatás kényszerítése
                        ]);
                        // Ha a felhasználó státusza 'fuggo', akkor jelszót kell változtatni
                        return redirect()->to(base_url())->with('info', 'A jelszó megváltoztatása szükséges!');
                    } else if ($user['status'] !== 'active') {
                        // Ha a felhasználó státusza nem 'active', akkor hibaüzenet
                        return redirect()->back()->with('error', 'A fiókod nem aktív, kérjük lépj kapcsolatba az adminisztrátorral.');
                    }
                    

                    // Session beállítása sikeres bejelentkezés után
                    session()->set([
                        'user_id' => $user['id'],
                        'fullname' => $user['fullname'],
                        'isLoggedIn' => true,
                    ]);
                    return redirect()->to(base_url('/dashboard-default'));
                } else {
                    // Helytelen felhasználónév vagy jelszó
                    return redirect()->back()->with('error', 'Helytelen felhasználónév vagy jelszó.');
                }
            } else {
                // Hiányzó vagy érvénytelen adatok
                return redirect()->back()->with('error', 'Hiányos adatok.');
            }
        }

        // GET kérés esetén a login nézet megjelenítése
        $data = [
            'head_title' => 'Login',
        ];
        return view( 'auth/login', $data );

        
    }

    public function changePassword()
{

    if ($this->request->getMethod() === 'post') {
        $rules = [
            'current_password'      => 'required',
            'new_password'          => 'required|min_length[6]',
            'confirm_new_password'  => 'required|matches[new_password]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $userId = session()->get('user_id');
            $user = $userModel->find($userId);

            // Ellenőrizzük a jelenlegi jelszót
            if (password_verify($this->request->getPost('current_password'), $user['password'])) {
                // Új jelszó hash-elése
                $newPasswordHash = password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT);

                // Jelszó frissítése az adatbázisban
                $userModel->update($userId, [
                    'password' => $newPasswordHash,
                    'status'   => 'active',  // Státusz aktívvá változik
                ]);

                session()->remove('forcePasswordChange');

                // Logolás
                log_to_db('info', 'A felhasználó megváltoztatta a jelszavát', $userId);

                $redirectUrl = $this->request->getPost('redirect_url');
                return redirect()->to($redirectUrl)->with('success', 'A jelszó sikeresen megváltozott!');
            } else {
                // Hibás jelenlegi jelszó esetén
                return redirect()->back()->with('error', 'A jelenlegi jelszó helytelen.');
            }
        } else {
            // Validációs hibák esetén
            return redirect()->back()->with('error', 'Kérjük, ellenőrizze a beírt adatokat!');
        }
    }
}

    public function logout()
        {
            // Kiléptetéskor a session törlése
            session()->destroy();
            
            // Visszairányítás a bejelentkezési oldalra
            return redirect()->to(base_url('login'));
        }

    
}

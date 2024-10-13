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
                        // Ha a felhasználó státusza 'fuggo', akkor jelszót kell változtatni
                        return redirect()->back()->with('info', 'A jelszó megváltoztatása szükséges!');
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

    public function logout()
        {
            // Kiléptetéskor a session törlése
            session()->destroy();
            
            // Visszairányítás a bejelentkezési oldalra
            return redirect()->to(base_url('login'));
        }

    
}

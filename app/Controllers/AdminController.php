<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class AdminController extends Controller
{
    public function users()
    {
        $userModel = new UserModel();

        // Összes felhasználó lekérdezése
        $data = [
            'users' => $userModel->findAll(),
            'head_title' => 'Felhasználók',
            'breadcrumb_item' => 'Felhasználók',
        ];
        // A nézet megjelenítése a felhasználók adatával
        return view('auth/users', $data);
    }

    public function addUser()
    {
        helper(['form', 'url']);

        // POST kérést figyelünk
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]',
                'email'    => 'required|valid_email',
                'fullname' => 'required',
                'password' => 'required|min_length[6]',
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();

                // Jelszó hash-elése
                $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

                // Új felhasználó mentése az adatbázisba
                $userModel->save([
                    'username' => $this->request->getPost('username'),
                    'email'    => $this->request->getPost('email'),
                    'fullname' => $this->request->getPost('fullname'),
                    'password' => $hashedPassword,
                    'status'   => 'fuggo', // Alapértelmezett státusz
                ]);

                return redirect()->to('/admin/users')->with('success', 'Felhasználó sikeresen létrehozva!');
            } else {
                // Hibakezelés
                return redirect()->back()->with('error', 'Hibás adatok, kérjük ellenőrizze!');
            }
        }
    }

    public function activateUser($id)
    {
        $userModel = new UserModel();

        // A felhasználó státuszának aktiválása
        $userModel->update($id, ['status' => 'active']);


        // Naplózás az adatbázisba
        log_to_database('info', 'Felhasználó ID ' . $id . ' aktiválva lett.', session()->get('user_id'));


        // Visszairányítás és üzenet
        return redirect()->to(base_url('/admin/users'))->with('success', 'Felhasználó aktiválva!');
    }

    // Deaktiválja a felhasználót
    public function deactivateUser($id)
    {
        

        $userModel = new UserModel();

        // A felhasználó státuszának inaktiválása
        $userModel->update($id, ['status' => 'inactive']);
        
        
        // Naplózás az adatbázisba
        log_to_db('info', 'Felhasználó sikeresen bejelentkezett', 123);


        // Visszairányítás és üzenet
        return redirect()->to(base_url('/admin/users'))->with('success', 'Felhasználó inaktiválva!');
    }

    
}

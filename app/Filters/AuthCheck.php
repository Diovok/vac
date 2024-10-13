<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
        if (!session()->get('isLoggedIn')) {
            // Ha nincs bejelentkezve, irányítsuk át a login oldalra
            return redirect()->to('/login')->with('error', 'Kérjük, jelentkezzen be!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nincs további művelet az után, hogy az oldal betöltött
    }
}

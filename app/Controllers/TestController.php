<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestController extends Controller
{
    public function index()
    {
        // Egyszerű naplóüzenet hozzáadása
        log_message('debug', 'Ez egy teszt naplóüzenet.');

        echo "Teszt naplózás!";
    }
}

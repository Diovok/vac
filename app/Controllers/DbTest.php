<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DbTest extends Controller
{
    public function index()
    {
        // Adatbázis kapcsolat létrehozása
        $db = \Config\Database::connect();

        // Teszt lekérdezés - Az adatbázis nevét kérdezi le
        try {
            $query = $db->query("SELECT DATABASE() AS dbname");
            $result = $query->getRow();

            // Ha az eredmény sikeres, kiírjuk az adatbázis nevét
            if ($result) {
                echo "Sikeres kapcsolat! Az adatbázis neve: " . $result->dbname;
            } else {
                echo "Az adatbázis kapcsolat sikerült, de nincs eredmény.";
            }
        } catch (\Exception $e) {
            // Hiba esetén megjelenítjük a hibát
            echo "Hiba történt: " . $e->getMessage();
        }

    }
}

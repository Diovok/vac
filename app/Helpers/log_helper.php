<?php

use App\Models\LogModel;

if (!function_exists('log_to_db')) {
    function log_to_db($level, $message, $userId = null)
    {
        // LogModel példány létrehozása
        $logModel = new LogModel();

        // Log mentése az adatbázisba
        $logModel->insert([
            'level'    => $level,
            'message'  => $message,
            'user_id'  => $userId,
        ]);
    }
}
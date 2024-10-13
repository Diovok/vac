<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'logs'; // A tábla neve
    protected $primaryKey = 'id'; // Elsődleges kulcs
    protected $allowedFields = ['level', 'message', 'user_id', 'created_at']; // Engedélyezett mezők

    // Ha csak a 'created_at'-ot akarod használni, és nem akarod az 'updated_at'-ot:
    protected $useTimestamps = true; // Timestamps használata

    // Csak a 'created_at' mezőt kezeld, nincs szükség 'updated_at'-ra
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // Kikapcsoljuk az 'updated_at'-ot
}
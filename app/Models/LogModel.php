<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table      = 'logs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['level', 'message', 'user_id', 'created_at'];

    // Automatikusan kezelje az időbélyegeket
    protected $useTimestamps = true;
}

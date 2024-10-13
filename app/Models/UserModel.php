<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'fullname', 'email', 'password', 'status'];

    // Adott mezők automatikus kitöltése (pl. created_at, updated_at)
    protected $useTimestamps = true;
}

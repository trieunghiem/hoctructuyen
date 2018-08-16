<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $feild = ['id', 'name', 'email', 'password', 'roles', 'status', 'remember_token'];
}

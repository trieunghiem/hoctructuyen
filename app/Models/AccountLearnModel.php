<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountLearnModel extends Model
{
    protected $table = 'account_learn';
    protected $feild = ['id', 'name', 'email', 'password'];
}

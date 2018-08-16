<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatingModel extends Model
{
    protected $table = 'rating';
    protected $feild = ['id', 'lesson_id', 'star', 'comment'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonModel extends Model
{
    protected $table = 'lesson';
    protected $feild = ['id', 'chapter_id', 'name', 'alias', 'time'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChapterModel extends Model
{
    protected $table = 'chapter';
    protected $feild = ['id', 'course_id', 'name', 'alias'];
}

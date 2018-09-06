<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table = 'course';
    protected $feild = ['id', 'name', 'alias', 'description', 'teacher', 'category', 'path_file_video', 'url_video', 'learn_what', 'content', 'avatar', 'status', 'show_home', 'promotion', 'price', 'old_price'];
}

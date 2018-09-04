<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonModel extends Model
{
    protected $table = 'lesson';
    protected $feild = ['id', 'chapter_id', 'name', 'file_video', 'url_video', 'embed_video', 'time', 'status', 'status_try'];
}

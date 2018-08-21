<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;

class CourseController extends Controller
{
	public function getInsertCourse(Request $request)
	{
		return view('admin.course.insertContent');
	}
	
}
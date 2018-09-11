<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function login(Request $request)
	{
		return view('web.user.login');
	}

	public function register(Request $request)
	{
		return view('web.user.register');
	}
}
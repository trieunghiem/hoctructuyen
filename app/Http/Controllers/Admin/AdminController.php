<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller
{
	public function getLogin()
	{
		if(Auth::guard('admin')->check())
		{
			return redirect()->route('dashBoard');
		}else{
			return view('admin.login');
		}
	}

	public function postLogin(Request $request)
	{
		$login = [
			'email' => $request->email,
			'password' => $request->password,
		];

		if(Auth::guard('admin')->attempt($login, $request->has('remember'))){
			return redirect()->route('dashBoard');
		}
		else {
			return redirect()->route('getLogin');
		}
	}

// trieu ga

	public function dashBoard()
	{
		return view('admin.dashBoard.content');
	}
}
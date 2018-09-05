<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseModel;

class HomeController extends Controller
{
	public function home()
	{
		$highlights = CourseModel::select('id', 'name', 'alias', 'price', 'old_price', 'avatar')
		->where('status', 'OK')
		->where('show_home', '!=', null)
		->orderBy('show_home', 'DESC')
		->skip(0)->take(8)->get()->toArray();

		$highlight = array_chunk($highlights, 4);

		return view('web.home.content', compact('highlight'));
	}
}
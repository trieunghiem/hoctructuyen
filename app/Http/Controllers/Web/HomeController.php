<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseModel;

class HomeController extends Controller
{
	public function home()
	{
		$highlight = CourseModel::select('id', 'name', 'alias', 'price', 'old_price', 'avatar')
		->where('status', 'OK')
		->where('show_home', '!=', null)
		->orderBy('show_home', 'DESC')
		->skip(0)->take(8)->get()->toArray();

		$highlight = array_chunk($highlight, 4);

		$latest = CourseModel::select('id', 'name', 'alias', 'price', 'old_price', 'avatar')
		->where('status', 'OK')
		->orderBy('id', 'DESC')
		->skip(0)->take(8)->get()->toArray();

		$latest = array_chunk($latest, 4);

		$promotion = CourseModel::select('id', 'name', 'alias', 'price', 'old_price', 'avatar')
		->where('status', 'OK')
		->where('promotion', '!=', null)
		->orderBy('promotion', 'DESC')
		->skip(0)->take(8)->get()->toArray();

		$promotion = array_chunk($promotion, 4);

		return view('web.home.content', compact('highlight', 'latest', 'promotion'));
	}
}
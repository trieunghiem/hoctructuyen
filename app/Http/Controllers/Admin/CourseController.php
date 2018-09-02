<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Pagination\Paginator;
use App\Lib\LibImageVideoController;
use App\Models\CourseModel;
use App\Models\ChapterModel;
use App\Models\LessonModel;

class CourseController extends Controller
{
	public function getListCourse(Request $request)
	{
		return view('admin.course.listContent');
	}

	public function getInsertCourse(Request $request)
	{
		return view('admin.course.insertContent');
	}

	public function getUpdateCourse(Request $request)
	{
		$course = CourseModel::find($request->id);
		if (!isset($course->id)) {
			return redirect()->route('dashBoard');
		}

		$contentCourse = ChapterModel::where('course_id', $request->id)->orderBy('id','ASC')->get();
		foreach ($contentCourse as $key => $value) {
			$contentCourse[$key]->lesson = LessonModel::where('chapter_id', $value->id)->orderBy('id','DESC')->get();
		}

		return view('admin.course.updateContent', compact('course', 'contentCourse'));
	}
	
	public function postSaveCourse(Request $request)
	{
		$course = $request->only(['name', 'alias', 'description', 'category', 'url_video', 'content']);

		// $course['show_home'] = null;
		// $course['show_home'] = date('Y-m-d H:i:s');

		if($request->hasFile('avatar') && LibImageVideoController::checkTypeExtensionFile($request->file('avatar')) == 'image'){
			$avatarPath = LibImageVideoController::saveAvatarCourse($request->file('avatar'));
			$course['avatar'] = ($avatarPath != 'false') ? $avatarPath : '';
		}

		if($request->hasFile('path_file_video') && LibImageVideoController::checkTypeExtensionFile($request->file('path_file_video')) == 'video'){

			$videoPath = LibImageVideoController::saveVideo($request->file('path_file_video'), $request->alias);
			$course['path_file_video'] = ($videoPath != 'false') ? $videoPath : '';
		}

		$course['status'] = (isset($request->status) && $request->status == 'on') ? 1 : 0;

		if (isset($request->price)) {
			$course['price'] = (int)($request->price);
		}

		if (isset($request->old_price)) {
			$course['old_price'] = (int)($request->old_price);
		}

		$learn_what = [];

		if(isset($request->learn_what)){
			$arrLearnWhat = $request->learn_what;
			foreach ($arrLearnWhat as $key => $value) {
				$learn_what[$key] = $value;
			}

			$course['learn_what'] = json_encode($learn_what);
		}

		if(isset($request->id)){
			$c = CourseModel::find($request->id);

			if (isset($course['avatar']) && $course['avatar'] != '') {
				LibImageVideoController::deleteFile($c->avatar);
			}

			if (isset($course['path_file_video']) && $course['path_file_video'] != '') {
				LibImageVideoController::deleteFile($c->path_file_video);
			}
			
			CourseModel::where('id', $request->id)->update($course);
			$id = $request->id;
		}else{
			$id = CourseModel::insertGetId($course);
		}

		return $id;
	}



	public function postGetListCourse(Request $request)
	{
		$itemsPerPage = isset($request->itemsPerPage) ? $request->itemsPerPage : 10;

		$search = isset($request->search) ? $request->search : '';

		$currentPage = $request->pag;

		Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });

        $paginate = CourseModel::select('id', 'name', 'alias', 'avatar', 'status', 'show_home')->orderBy('id', 'DESC')->paginate($itemsPerPage)->toArray();


        $totalItems = $paginate['total'];
        $totalPages = ceil($totalItems / $itemsPerPage);

		$re =  [
            'data' => $paginate['data'],
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
            'currentPage' => $currentPage,
        ];

        return json_encode($re);
		
	}


	public function postSaveChapter(Request $request)
	{
		if(isset($request->id)){
			$chapter = ChapterModel::find($request->id);
			$chapter->name = $request->name;
		}else{
			$chapter = new ChapterModel();
			$chapter->name = $request->name;
			$chapter->course_id = $request->course_id;
		}

		if ($chapter->save()) {
			return $chapter->id;
		}
	}




	public function postGetChapter(Request $request)
	{
		return json_encode(ChapterModel::find($request->id));
	}


	public function postDeleteChapter(Request $request)
	{
		$chap = ChapterModel::find($request->id);
		if ($chap->delete()) {
			LessonModel::where('chapter_id', $request->id)->delete();
			return 'true';
		}
	}




}
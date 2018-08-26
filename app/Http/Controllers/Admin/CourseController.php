<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use App\Lib\LibImageVideoController;
use App\Models\CourseModel;

class CourseController extends Controller
{
	public function getInsertCourse(Request $request)
	{
		return view('admin.course.insertContent');
	}



	public function getUpdateCourse(Request $request)
	{
		return view('admin.course.updateContent');
	}
	



	public function postSaveCourse(Request $request)
	{

		$course = $request->only(['name', 'alias', 'description', 'url_video', 'price', 'old_price']);

		if($request->hasFile('avatar') && LibImageVideoController::checkTypeExtensionFile($request->file('avatar')) == 'image'){

			$avatarPath = LibImageVideoController::saveAvatarCourse($request->file('avatar'));
			$course['avatar'] = ($avatarPath != 'false') ? $avatarPath : '';

		}

		if($request->hasFile('path_file_video') && LibImageVideoController::checkTypeExtensionFile($request->file('path_file_video')) == 'video'){

			$videoPath = LibImageVideoController::saveVideo($request->file('path_file_video'), $request->alias);
			$course['path_file_video'] = ($videoPath != 'false') ? $videoPath : '';
		}

		$course['status'] = (isset($request->status) && $request->status == 1) ? 1 : 0;

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
}
<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseModel;
use App\Models\ChapterModel;
use App\Models\LessonModel;

class CourseController extends Controller
{
	public function index(Request $request)
	{
        	$aliasArr = explode('-', $request->alias);
                $id = $aliasArr[count($aliasArr) - 1];
                $course = CourseModel::find($id);

                if ($course == null) {
                        return redirect()->route('home');
                }

                $course->learn_what = json_decode($course->learn_what);
                $course->learn_what = array_chunk($course->learn_what, 2);

                $chapter = ChapterModel::where('course_id', $id)->orderBy('id','ASC')->get();

                foreach ($chapter as $key => $value) {
                        $chapter[$key]->content = LessonModel::where('chapter_id', $value->id)->where('status', 'OK')->get();
                }

                $otherCourse = CourseModel::select('id', 'name', 'alias', 'price', 'old_price', 'avatar')
                        ->where('status', 'OK')
                        ->where('category', $course->category)
                        ->where('id', '!=', $course->id)
                        ->orderBy('id', 'DESC')
                        ->skip(0)->take(4)->get();


                // echo json_encode($otherCourse);die();

		return view('web.course.detailContent', compact('course', 'chapter', 'otherCourse'));
	}
}
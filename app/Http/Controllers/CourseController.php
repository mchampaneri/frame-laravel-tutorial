<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{


    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index')->with([
                                                    'courses' => $courses
                                                ]);
    }

    public  function  create()
    {
        return view('admin.course.create');
    }

    public  function  store( Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();

        return redirect()->route('courses.edit',['id'=>$course->id]);
    }

    public function  destroy($id)
    {
        $course = Course::findorfail($id);
        $course->delete();

        return redirect()->route('courses.index');

    }

    public function edit($id)
    {
        $course = Course::findorfail($id);
        $casts = $course->casts();
        return view('admin.course.screencast.index')->with([
                                                        'course'=>$course,
                                                        'casts'=>$casts
                                                        ]);
    }

    public  function  update(Request $request,$id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();
        return redirect()->route('courses.index');
    }
}

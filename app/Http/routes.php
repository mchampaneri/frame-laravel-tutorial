<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',function() {
    $courses = App\Course::all();
    $site = App\Site::where('active',1);
    return view('front.index')->with(['courses'=>$courses,
                                        'site'=>$site]);
});

Route::get('view/{id}',function($id){
    $course = App\Course::find($id);
    return view('front.course')->with(['course'=>$course]);
});

Route::get('view/{id1}/{id2}',function($id1,$id2){
    $course = App\Course::find($id1);
    $cast = App\Cast::find($id2);
    return view('front.course')->with(['course'=>$course,
                                        'cast'=>$cast]);
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('courses','CourseController');
    Route::resource('casts','CastController');
});

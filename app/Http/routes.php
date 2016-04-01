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



// Admin Login Routes
Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('/home', 'HomeController@index');
});

// Front End Routes
Route::get('/',function() {
    $site_name = Config::get('site.site_name');
    $twitter_url = Config::get('site.twitter_url');
    $facebook_url = Config::get('site.facebook_url');
    $google_plus_url = Config::get('site.google_plus_url');
    $courses = App\Course::all();

    return view('front.index')->with([  'courses'=>$courses,
                                        'site_name'=>$site_name,
                                        'twitter_url'=>$twitter_url,
                                        'facebook_url'=>$facebook_url,
                                        'google_plus_url'=>$google_plus_url
                                ]);
});

Route::get('view/{id}',function($id){
    $course = App\Course::find($id);
    $site_name = Config::get('site.site_name');
    $twitter_url = Config::get('site.twitter_url');
    $facebook_url = Config::get('site.facebook_url');
    $google_plus_url = Config::get('site.google_plus_url');
    return view('front.course')->with(['course'=>$course,
                                       'site_name'=>$site_name,
                                       'twitter_url'=>$twitter_url,
                                       'facebook_url'=>$facebook_url,
                                       'google_plus_url'=>$google_plus_url
                              ]);
});

Route::get('view/{id1}/{id2}',function($id1,$id2){
    $course = App\Course::find($id1);
    $cast = App\Cast::find($id2);
    $site_name = Config::get('site.site_name');
    $twitter_url = Config::get('site.twitter_url');
    $facebook_url = Config::get('site.facebook_url');
    $google_plus_url = Config::get('site.google_plus_url');
    return view('front.course')->with(['course'=>$course,
                                       'cast'=>$cast,
                                       'site_name'=>$site_name,
                                       'twitter_url'=>$twitter_url,
                                       'facebook_url'=>$facebook_url,
                                       'google_plus_url'=>$google_plus_url
                             ]);
});


// Secoured Admin Panel Routes

Route::group(['middleware' => ['web','auth']], function () {


    Route::resource('courses','CourseController');
    Route::resource('casts','CastController');

    Route::get('/dashboard',function() {
        $course_count = \App\Course::all()->count();
        $cast_count = \App\Cast::all()->count();
        return view('admin.dashboard')->with([
                                    'course_count' => $course_count,
                                    'cast_count' => $cast_count
                            ]);
    });
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::get('/siteprofile',['as'=>'siter',function(){
        $site_name = Config::get('site.site_name');
        $twitter_url = Config::get('site.twitter_url');
        $facebook_url = Config::get('site.facebook_url');
        $google_plus_url = Config::get('site.google_plus_url');
        return view('admin.profile.site')->with([
            'site_name'=>$site_name,
            'twitter_url'=>$twitter_url,
            'facebook_url'=>$facebook_url,
            'google_plus_url'=>$google_plus_url
        ]);
    }]);

    Route::post('/setsiteprofile',function() {
        $input = Request::all();
        Config::write('site',['site_name'=>$input['site_name'],
            'twitter_url'=>$input['twitter_url'],
            'facebook_url'=>$input['facebook_url'],
            'google_plus_url'=>$input['google_plus_url']
        ]);

        return redirect()->route('siter');
    });

    Route::get('/logout',function() {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->to('/');
    });


});


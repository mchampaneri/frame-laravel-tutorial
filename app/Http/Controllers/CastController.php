<?php

namespace App\Http\Controllers;

use App\Cast;
use Illuminate\Http\Request;

use App\Http\Requests;

class CastController extends Controller
{



    public function store(Request $request)
    {
        $cast = new Cast();
        $cast->course_id = $request->course_id;
        $cast->name= $request->name;
        $cast->url  = $request->url;
        $cast->save();

        return redirect()->route('courses.edit',['id'=>$cast->course_id]);
    }

    public  function  destroy($id)
    {
        $cast =Cast::find($id);
        $cast->delete();
        return redirect()->route('courses.edit',['id'=>$cast->course_id]);
    }

}

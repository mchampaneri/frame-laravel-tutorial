<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the Group
     * g.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        if($message = $request->session()->get('message'))
        {
             return view('users/index')->with(['users'=>$users,                                                
                                               'message'=>$message
                                               ]);
        }
        return view('users/index')->with(['users'=>$users]);
    }

    /**
     * Store a newly created Group
     * g in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
       
       $user = new  User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       // Checking for admin privilage before processing further
       if(Auth::user()->isAdmin())
       $user->save();
        // Profile Picture Setting
        if(isset($request->image))
        {
            $imageName = $user->id . '.' . 
            $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/images/profile/', $imageName);
            $user->profile_pic = 'images/profile/'.$imageName;
            $user->save();
        }
       return redirect()->route('users.index')->with(['message'=>['type'=>'success',
                                                            'text1'=>'User',
                                                            'text2'=>'Created']
                                                            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show')->with(['user'=>$user]);
    }

    /**
     * Show the form for editing the specified Group.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // return view('users/edit')->with(['user'=>$user]);
    }

    /**
     * Update the specified Group in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
        
    /**
     * Remove the specified Group from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with(['message'=>['type'=>'success',
                                                                   'text1'=>'User',
                                                                   'text2'=>'Deleted']
                                                            ]);;
    }

    /** 
    * Returns form to create new User
    * 
    *  
    */
    public function create()
    {
        return view('users/create');
    }
 
    /**
     * Authenticates the user and redirects accordingly
     * $request
     */
    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
          //  return "success";
            return redirect()->intended('/admin');
        }
        else
        {
            return "failed";
            return back();
        }
    }

    /**
     * Adds a Default Admin User a
     * [Can Used as Backup]
     */
    public function addDefault()
        {
            $user = new User;
            $user->name = "Admin";
            $user->email = "admin@mailpro.com";
            $user->password = Hash::make('1234abcd');
            if($user->save())
            {
                return " Default admin generated successfully";
            }
            else
            {
                return " Something Happen wrong";
            }
        }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginCheck(UserLoginRequest $request)
    {
        $password = $request->get('password');
        $user = User::where('email','=',$request->get('email'))->first();
        if (Auth::attempt([
            'email'=> $user->email,
            'password'=> $password

        ])){
            if ((Auth::user()->roll == '1')){
                return redirect()->route('admin.dashboard.file')->with('success','Admin log in Successfully');
            }
            else if(Auth::user()->roll == '2'){
                return redirect()->route('user.dashboard.page')->with('success','User log in Successfully');
            }else{
                return "Invalid User";
            }

        }
        else{
            return Redirect::back()->with('fail','Invalid User!');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


}

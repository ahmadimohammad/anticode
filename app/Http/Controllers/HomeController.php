<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function profile(){ 
        dd( auth()->user() );
    }


    // TODO: should use username not id

    public function userProfile(Request $request, $user){
        dd(  User::find($user));
    }

    public function plans(Request $request , $user){
        dd( $user);
    }


}

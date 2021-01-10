<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    function userLogin(Request $req){
        // return $req->input();

        $user = user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return 'email or password unmatched';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}

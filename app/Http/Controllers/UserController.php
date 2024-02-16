<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request){
       // dd($request->input());
        $user= new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make(($request->input('password')));
        $user->save();
        return $user;
    }

    public function login(Request $request){
        $user=User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response([
                'error'=>['Email or password incorred!']
            ]);
        }else{

        }
        return $user;
    }
}

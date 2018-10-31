<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
      {
      return view('auth/login');
      }
    public function postlogin(Request $request)
      {
      if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
        return redirect()->back();
        }
      return redirect()->route('home');
      }
    public function getRegis()
      {
      return view('auth/regis');
      }
    public function postRegis(Request $request)
    {
      //dd('regis oke');
      $this->validate($request,[
          'name'=>'required|min:4',
          'email'=> 'required|email|unique:users',
          'password'=>'required|min:5|confirmed'
      ]);
      User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
      ]);
      return Redirect()->back();
      }

    public function logout()
      {
          \Auth::logout();
          return redirect()->route('logout');
      }
}

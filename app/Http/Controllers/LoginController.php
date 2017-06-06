<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	if(!Auth::check())
    		return view('admin.login.login');
    	else
    		return redirect('admin');
    }
    public function postLogin(LoginRequest $request)
    {
    	$login1=[
    		'username'	=> $request->username,
    		'password'	=> $request->password,
    		'role_id'	=> 1
    	];
  		$login2=[
    		'username'	=> $request->username,
    		'password'	=> $request->password,
    		'role_id'	=> 2
    	];
    	if(Auth::attempt($login1)||Auth::attempt($login2))
    		return redirect('admin');
    	else
    		return redirect()->back()->with('status','Sai Username hoặc Password');
    }
    public function getLogout()
    {
    	Auth::logout();
    	return redirect('login');
    }
}

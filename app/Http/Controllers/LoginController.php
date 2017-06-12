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
    	$login=[
    		'username'	=> $request->username,
    		'password'	=> $request->password,
    	];
  		
    	if(Auth::attempt($login)){
    		return redirect('admin');
        }
    	return redirect()->back()->with(['status' => 'err','messages' => 'Sai Username hoặc Password']);
    }
    public function getLogout()
    {
    	Auth::logout();
    	return redirect('login');
    }
}

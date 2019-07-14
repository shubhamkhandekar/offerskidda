<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
/*use Illuminate\Support\Facades\Validator;*/
use Illuminate\Support\Facades\Hash;


class LoginController extends InitialController
{
	public function checklogin(Request $request)
	{ 
		if(!$request->session()->exists('emailid')){
			return view('Login');
		}else{
			return redirect('/dashboard');
		}	
	}
	public function validateuser(Request $req)
	{
		print_r($req->all());exit();
		
	}
}
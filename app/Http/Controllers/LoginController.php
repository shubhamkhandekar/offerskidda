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
		if(!$request->session()->exists('USERNAME')){
			return view('Login');
		}else{
			return redirect('/dashboard');
		}	
	}
	public function validateuser(Request $request)
	{
		//print_r($req->all());exit();
		$data=DB::select('call Usp_validate_user(?,?,?)',array($request->username,$request->pass,$request->ip()));
		if (!empty($data)){
			$val=$data[0];
			$request->session()->put('USERNAME',$val->USERNAME);
			$request->session()->put('CID',$val->CID);
			$request->session()->put('USEREMAIL',$val->USEREMAIL);
			$request->session()->put('LOGINDATE',$val->LOGINDATE); 
			 return redirect('/dashboard');
		}else{
			Session::flash('msg', "Invalid email or password. Please Try again!");
			return redirect('/');
		}
	}
}
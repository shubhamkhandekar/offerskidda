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
class DashboardController extends InitialController
{
  public function showdashboard()
  {
  	return view('dashboard');
  }
}
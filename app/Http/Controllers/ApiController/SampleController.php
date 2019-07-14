<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CallApiController;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;

class SampleController extends CallApiController
{
   public function getcity(Request $req)
   {
   	print_r("ok");exit();
   }
}
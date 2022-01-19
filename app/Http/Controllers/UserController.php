<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){

    return view('dashbord.user.index');
   }

   function profile(){
       return view('dashbord.user.profile');
   }
   function settings(){
       return view('dashbord.user.setting');
   }
}

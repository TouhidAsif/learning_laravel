<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\user;
use App\client;
use App\role;
class HomeController extends Controller
{
     public function index(){
     // $user=user::find(2);
        //return $user;
       // return view('welcome',compact('user'));
         $role = client::find(2)->roles;
         $client = role::find(2)->clients;
         return $client;
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   
   public function form(){
        return view ('Register');
   }
   public function welcomea_post (Request $request ){
    $fname = $request["fname"];
    $lname = $request["lname"];
    return view ('welcomea', ['fname' => $fname],  ['lname' => $lname]); 
    }
}

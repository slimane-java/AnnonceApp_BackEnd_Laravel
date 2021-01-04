<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AdminController extends BaseController
{
  

    public function register(Request $request)
    {
        
        $input=array("user_id"=>auth()->user()->id);
        $admin= Admin::create($input);
        return $this->sendResponse( $input, 'User register successfully.');  
    }

    public function GetAdmin()
    {
          $Admin= User::with("admins")->get();

          
        return $Admin;
    }

   


}

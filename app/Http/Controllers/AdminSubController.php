<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSub;

class AdminSubController extends Controller
{
    public function index()
    {
       /* $admin=new Admin();
        $admin->id=auth()->user()->id;
        
        return response()->json([
            'success' => true,
            'data' => $admin
        ]);*/
    }

    public function store()
    {
       
        $admin=new AdminSub();
        
        $admin->user_id=auth()->user()->id;


        if(auth()->user()->adminsubs()->save($admin))
        {
            return response()->json([
                'success' => true,
                'data' => $admin->toArray()
            ]);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Post not added'
            ], 500);
        }

    }
}

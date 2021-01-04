<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Http\File;
use Response;
use App\Models\Entreprises;

class EntreprisesController extends  BaseController
{


    public function register(Request $request)
    {
        
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=>'required|email',
            'tel'=>'required',
            'fix'=>'required',
            'photo'=>'required|image:jpeg,png,jpg,gif,svg|max:2048',
            'adress' => 'required',
            'secteur'=>'required',
            'discription'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $input['photo']=Storage::disk('public')->putFile('upload', $request->file('photo'));
        $entreprises = Entreprises::create($input);
        $success['entreprises'] =  $entreprises;
        
        return $this->sendResponse( $input, 'User register successfully.');
    
    }

  

    public function GetImage(Request $request, $id)
    {

        return Response::file(storage_path("app/public/upload/".$id));
    }
    public function Upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'photo' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());     
        }

        
$path =Storage::disk('public')->putFile('upload', $request->file('photo'));

return $validator->fails();//Response::file(storage_path("app/public/upload/".$id));
  
  
  
  

        

       
    }

 public function Test()
 {
     return "fuck you";
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

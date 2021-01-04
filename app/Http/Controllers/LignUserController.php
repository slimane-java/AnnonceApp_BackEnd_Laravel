<?php

namespace App\Http\Controllers;

use App\Models\LignUser;
use Illuminate\Http\Request;
use Response;

class LignUserController extends Controller
{

   

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input="slimane";
        return \Response::json($input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input=$request->all();

        $lignUser=LignUser::create($input);

        return response()->json($lignUser);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LignUser  $lignUser
     * @return \Illuminate\Http\Response
     */
    public function show(LignUser $lignUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LignUser  $lignUser
     * @return \Illuminate\Http\Response
     */
    public function edit(LignUser $lignUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LignUser  $lignUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LignUser $lignUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LignUser  $lignUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LignUser $lignUser)
    {
        //
    }
}

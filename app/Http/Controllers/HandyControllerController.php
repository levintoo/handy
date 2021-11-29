<?php

namespace App\Http\Controllers;

use App\Models\HandyController;
use App\Models\User;
use Illuminate\Http\Request;

class HandyControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = HandyController::get();
        return view('welcome',['users' =>$users]);
    }

    public function users()
    {
        return view('users');
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
        $user = new HandyController();

        $user->name = request('name');
        $user->residence = request('residence');

        $user->save();

        return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HandyController  $handyController
     * @return \Illuminate\Http\Response
     */
    public function show(HandyController $handyController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HandyController  $handyController
     * @return \Illuminate\Http\Response
     */
    public function edit(HandyController $handyController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HandyController  $handyController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HandyController $handyController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HandyController  $handyController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HandyController $handyController)
    {
        //
    }
}

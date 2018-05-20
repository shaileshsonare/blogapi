<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = UsersModel::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return "hello,i m create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user = new UsersModel();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        // $user->updated_at = null;
        // $user->created_at = null;
        if($user->save()) {
            return "success";
        } else {
            return "fail";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user = UsersModel::find($id);
        
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return "hello,i m edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = UsersModel::find($id);
        // return $request->all();
        $user->firstname = $request->get('firstname') ?: $user->firstname;
        $user->lastname = $request->get('lastname') ?: $user->lastname;
        // $user::where('user_id',$id)->$request->update('firstname');
        
        if($user->save()) {
            return "success";
        } else {
            return "fail";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = UsersModel::find($id);
        if($user->delete()) {
            return "success";
        } else {
            return "fail";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posts($id) {
        $user = UsersModel::find($id);
        return $user->posts;
    }
}

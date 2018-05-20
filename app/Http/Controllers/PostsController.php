<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostsModel;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = PostsModel::all()->sortByDesc('created_at');
        $data = [];

        foreach($posts as $k => $post) {
            $user = PostsModel::find($post['post_user_id'])->user;
            $data[] = ["post" => $post, "user" => $user];
        }
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
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
        $post = new PostsModel();
        $post->post_user_id = $request->get('post_user_id');
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        if($post->save()){
            return 'success';
        }else{
            return 'fail';
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = PostsModel::find($id);
        $post->user;
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $post = PostsModel::find($id);
        $post->title = $request->get('title') ?: $post->title;
        $post->body = $request->get('body') ?: $post->body;
        if($post->save()) {
            $post->touch();
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
        $post = PostsModel::find($id);
        if($post->delete()) {
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
    public function comments($id) {
        $post = PostsModel::find($id);
        $post->comments;
        return $post;
    }


}

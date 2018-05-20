<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentsModel;

class CommentsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $comments = CommentsModel::all();
        return $comments;
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
    public function store(Request $request) {
        $comment = new CommentsModel();
        $comment->comment_post_id = $request->get('comment_post_id');
        $comment->comment_user_id = $request->get('comment_user_id');
        $comment->message = $request->get('message');
        if($comment->save()) {
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
        $comment = CommentsModel::find($id);
        $comment->post;
        $comment->user;
        return $comment;
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
    public function update(Request $request, $id)  {
        $comment = CommentsModel::find($id);
        $comment->comment_post_id = $request->get('comment_post_id') ?: $comment->comment_post_id;
        $comment->comment_user_id = $request->get('comment_user_id') ?: $comment->comment_user_id;
        $comment->message = $request->get('message') ?: $comment->message;
        if($comment->save()) {
            $comment->touch();
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
        $comment = CommentsModel::find($id);
        if($comment->delete()) {
            return "success";
        } else {
            return "fail";
        }
    }
}

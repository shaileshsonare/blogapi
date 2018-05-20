<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model {
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = ['comment_post_id', 'comment_user_id', 'message'];

    public function post() {
        return $this->belongsTo('App\PostsModel', 'comment_post_id', 'post_id');
    }

    public function user() {
        return $this->belongsTo('App\UsersModel', 'comment_user_id', 'user_id');
    }
}

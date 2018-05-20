<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model {
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    public $timestamps = true;

    protected $fillable = ["post_user_id","title","body"];

    public function user() {
        return $this->belongsTo('App\UsersModel', "post_user_id", "user_id");
    }

    public function comments() {
        return $this->hasMany('App\CommentsModel', "comment_post_id", "post_id");
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = "user_id";
    protected $fillable = ["firstname", "lastname"];

    public function posts() {
        return $this->hasMany('App\PostsModel', 'post_user_id', 'user_id');
    }

}

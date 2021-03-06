<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class LikeComment extends Authenticatable
{
    use Notifiable;

    public $with = ['user'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comments_id','users_id'
    ];

    protected $table = "user_like_comment";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo('App\User','users_id');
    }
    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}

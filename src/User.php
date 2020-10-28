<?php

namespace fjerbi\ultimateblog;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function stories(){
        return $this->hasMany(Story::class);
    }
    public function role(){
        return $this->belongsTo(fjerbi\ultimateblog\Story::class);
    }
    public function favorite_stories()
    {
        return $this->belongsToMany('fjerbi\ultimateblog\Story')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('fjerbi\ultimateblog\Comment');
    }

   
}

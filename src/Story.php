<?php

namespace fjerbi\ultimateblog;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'category', 'tags','description','slug'];

    public function user()
    {
        return $this->belongsTo('fjerbi\ultimateblog\User');
    }

    public function categories()
    {
        return $this->belongsToMany('fjerbi\ultimateblog\Category')->withTimestamps();
    }
    public function tags()
    {
        return $this->belongsToMany('fjerbi\ultimateblog\Tag')->withTimestamps();
    }

    public function favorite_to_users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('fjerbi\ultimateblog\Comment');
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved', 1);
    }
    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }
}

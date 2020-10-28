<?php

namespace fjerbi\ultimateblog;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Tag extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    public function stories(){
        return $this->belongsToMany(Story::class);
    }

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public static function getStories(){
        return Story::publishedAndActive()->with('user')
            ->withCount(['favoriteUsers', 'comments'])
            ->latest()->get()->toArray();
    }
}

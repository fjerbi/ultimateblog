<?php

namespace fjerbi\ultimateblog;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Comment extends Model
{
    /**
     * Get the owning commentable model.
     */
    public function story()
    {
        return $this->belongsTo('fjerbi\ultimateblog\Story');
    }

    public function user()
    {
        return $this->belongsTo('fjerbi\ultimateblog\User');
    }
}

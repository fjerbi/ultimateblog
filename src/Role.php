<?php

namespace fjerbi\ultimateblog;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->hasMany('fjerbi\ultimateblog\User');
    }
}

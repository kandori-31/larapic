<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function tweets(){
        return $this->belongsTo('App\Tweet');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }


}

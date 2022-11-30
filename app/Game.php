<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getPostImageAttribute($value){
        return asset($value);
    }
    public function live(){
        return $this->belongsToMany(Live::class);
    }
}

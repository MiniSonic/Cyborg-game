<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    //
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function game(){
        return $this->belongsToMany(User::class);
    }

    public function getPostImageAttribute($value){
        return asset($value);
    }
}

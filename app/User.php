<?php

namespace App;

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
        'name', 'email', 'password',
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


    public function roles(){
        $this->belongsToMany(Role::class);
    }
    public function permissions(){
        $this->belongsToMany(Permission::class);
    }
    public function games(){
        $this->hasMany(Game::class);
    }
    public function userHasRole($role_name){
        foreach($this->roles as $role){
            if($role_name == $role->name){
                return true;
            }
        }
        return false;
    }
    // public function assignRole($role_name){
    //     $role = Role::where('name', 'Admin');
    //     $this->attach($role);
    // }


    public function lives(){
        $this->hasMany(Lived::class);
    }

}

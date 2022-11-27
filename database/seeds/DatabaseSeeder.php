<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Game;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', 10)->create()->each(function ($user){
            $role = Role::find(1);
            $user->roles()->attach($role);
            $user->games()->save(factory('App\Game'))->make();
        });
    }
}

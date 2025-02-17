<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= User::create([
            'name'=>'Ali',
            'email'=>'Ali@exampl.com',
            'password'=>Hash::make('secret'), 
        ]); 
        $user->roles()->attach([1,3]);
        $user2= User::create([
            'name'=>'Jhon',
            'email'=>'jhon@exampl.com',
            'password'=>Hash::make('secret'), 
        ]); 
        $user2->roles()->attach([2]);
        $user3= User::create([
            'name'=>'Admin',
            'email'=>'Admin@exampl.com',
            'password'=>Hash::make('secret'), 
        ]); 
        $user3->roles()->attach([1]);

    //   \App\Models\User::factory(10)->create();
    }
}

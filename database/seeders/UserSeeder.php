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
        User::create([
            'name'=>'Ali',
            'email'=>'Ali@exampl.com',
            'password'=>Hash::make('secret'), 
        ]);
      \App\Models\User::factory(10)->create();
    }
}

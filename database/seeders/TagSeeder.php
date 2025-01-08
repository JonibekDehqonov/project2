<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Tag::create(['name'=> 'Web Design']);
       Tag::create(['name'=> 'Web Development']);
       Tag::create(['name'=> 'Online Marketing']);
       Tag::create(['name'=> 'Keyword Research']);
       Tag::create(['name'=> 'Email Marketing']);
    }
}

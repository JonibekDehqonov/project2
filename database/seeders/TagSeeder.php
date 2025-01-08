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
       $tags=[
        ['name'=>'Desing'],
        ['name'=>'Marketing'],
        ['name'=>'SEO'],
        ['name'=>'Writing'],
        ['name'=>'Consulting'],
        ['name'=>'Development'],
        ['name'=>'Reading'],
       ];
       Tag::insert($tags);
    }
}

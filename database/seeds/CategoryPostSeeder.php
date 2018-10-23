<?php

use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories_posts')->delete();
        DB::table('categories_posts')->insert([
            'id' => 1,
            'name' => 'Root',
            'parent' => 0,
            'left' => 0,
            'right' => 1,
            'level' => 0
        ]);
    }
}

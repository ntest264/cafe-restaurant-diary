<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            'name' => '日本料理',
        ]);
        DB::table('categories')->insert([
            'name' => '西洋料理',
        ]);
        DB::table('categories')->insert([
            'name' => '中華料理',
        ]);
        DB::table('categories')->insert([
            'name' => 'エスニック料理',
        ]);
        DB::table('categories')->insert([
            'name' => 'その他',
        ]);
    }
}

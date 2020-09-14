<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

            Category::create([
                'name' => 'tecnología'
            ]);
            Category::create([
                'name' => 'electrónicos'
            ]);
            Category::create([
                'name' => 'bisutería'
            ]);
            Category::create([
                'name' => 'ropa'
            ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class ProductConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_conditions')->truncate();
        DB::table('product_conditions')->insert([
            0 => [
                'condition' => 'Nuevo'
            ],
            1 => [
                'condition' => 'Seminuevo'
            ],
            2 => [
                'condition' => 'Usado'
            ]
        ]);
    }
}

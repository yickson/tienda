<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            0 => [
                'name' => 'Yickson Ramirez',
                'email' => 'yicksonr@gmail.com',
                'password' => bcrypt('casa2468'),
                'type' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            1 => [
                'name' => 'Rossy Perez',
                'email' => 'rossyesmeral@gmail.com',
                'password' => bcrypt('2507ross'),
                'type' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(TMSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}

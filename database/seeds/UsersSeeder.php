<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'family' => 'Petrenko',
                'name' => 'Petro',
                'phone' => '+38(063)1234567',
                'email' => 'petro@gmail.com',
                'password' => bcrypt('petro'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),            ],
            [
                'family' => 'Sidorenko',
                'name' => 'Ivan',
                'phone' => '+38(063)7654321',
                'email' => 'ivan@gmail.com',
                'password' => bcrypt('ivan'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

        ]);

    }
}

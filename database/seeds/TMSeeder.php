<?php

use Illuminate\Database\Seeder;

class TMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tm = ['Parker', 'Axent', 'Buromax', 'Kite', 'Pilot', 'Centropen', 'Edding'];

        $tm_add = [];
        foreach ($tm as $tm_elem){
            $tm_add[] = [
                'title' => $tm_elem,
            ];
        }
        DB::table('trademarks')->insert($tm_add);
    }
}

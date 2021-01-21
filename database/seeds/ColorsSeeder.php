<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['White' => 'ffffff', 'Black' => '000000', 'Red' => 'ff0000', 'Blue' => '0000ff', 'Green' => '008000',];

        $color_add = [];
        foreach ($colors as $color => $color_code){
            $color_add[] = [
                'title' => $color,
                'web_code' => $color_code
            ];
        }
        DB::table('colors')->insert($color_add);
    }
}

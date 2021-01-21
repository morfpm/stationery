<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Ручки', 'Маркеры', 'Карандаши', 'Офисная бумага', 'Калькуляторы'];

        $cat_add = [];
        foreach ($categories as $cat){
            $cat_add[] = [
                'title' => $cat,
            ];
        }
        DB::table('categories')->insert($cat_add);
    }
}

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
        DB::table('categories')->insert(
            [
                ['slug' => 'AP', 'name' => 'Autre Production'],
                ['slug' => 'BV', 'name' => 'Brevet'],
                ['slug' => 'CF', 'name' => 'Article dans des Conférences Françaises'],
                ['slug' => 'CI', 'name' => 'Article dans des Conférences Internationales'],
                ['slug' => 'OS', 'name' => 'Ouvrage Scientifique'],
                ['slug' => 'RF', 'name' => 'Article dans des Revues Françaises'],
                ['slug' => 'RI', 'name' => 'Article dans des Revues Internationales'],
                ['slug' => 'TD', 'name' => 'Thèse de Doctorat'],
            ]
        );
    }
}

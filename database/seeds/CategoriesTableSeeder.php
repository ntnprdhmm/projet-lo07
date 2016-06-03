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
        DB::table('categories')->insert(array(
            array('slug' => 'AP', 'name' => 'Autre Production'),
            array('slug' => 'BV', 'name' => 'Brevet'),
            array('slug' => 'CF', 'name' => 'Article dans des Conférences Françaises'),
            array('slug' => 'CI', 'name' => 'Article dans des Conférences Internationales'),
            array('slug' => 'OS', 'name' => 'Ouvrage Scientifique'),
            array('slug' => 'RF', 'name' => 'Article dans des Revues Françaises'),
            array('slug' => 'RI', 'name' => 'Article dans des Revues Internationales'),
            array('slug' => 'TD', 'name' => 'Thèse de Doctorat')
        ));
    }
}

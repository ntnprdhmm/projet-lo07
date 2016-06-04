<?php

use Illuminate\Database\Seeder;

class AuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteurs')->insert(array(
            // publication 1
            array('id' => 1, 'position' => 2, 'publication_id' => 1, 'user_id' => 4),
            array('id' => 2, 'position' => 1, 'publication_id' => 1, 'user_id' => 6),
            // publication 2
            array('id' => 3, 'position' => 1, 'publication_id' => 2, 'user_id' => 2),
            // publication 3
            array('id' => 4, 'position' => 2, 'publication_id' => 3, 'user_id' => 1),
            array('id' => 5, 'position' => 3, 'publication_id' => 3, 'user_id' => 2),
            array('id' => 6, 'position' => 1, 'publication_id' => 3, 'user_id' => 3),
            // publication 4
            array('id' => 7, 'position' => 1, 'publication_id' => 4, 'user_id' => 4),
            array('id' => 8, 'position' => 2, 'publication_id' => 4, 'user_id' => 5),
            // publication 5
            array('id' => 9, 'position' => 1, 'publication_id' => 5, 'user_id' => 1),
            // publication 6
            array('id' => 10, 'position' => 1, 'publication_id' => 6, 'user_id' => 3),
            array('id' => 11, 'position' => 2, 'publication_id' => 6, 'user_id' => 4),
            //publication 7
            array('id' => 12, 'position' => 1, 'publication_id' => 7, 'user_id' => 1),
            array('id' => 13, 'position' => 2, 'publication_id' => 7, 'user_id' => 2),
            array('id' => 14, 'position' => 3, 'publication_id' => 7, 'user_id' => 4),
            // publication 8
            array('id' => 15, 'position' => 2, 'publication_id' => 8, 'user_id' => 1),
            array('id' => 16, 'position' => 1, 'publication_id' => 8, 'user_id' => 3),
            // publication 9
            array('id' => 17, 'position' => 1, 'publication_id' => 9, 'user_id' => 1),
            array('id' => 18, 'position' => 3, 'publication_id' => 9, 'user_id' => 2),
            array('id' => 19, 'position' => 3, 'publication_id' => 9, 'user_id' => 4),
            array('id' => 20, 'position' => 2, 'publication_id' => 9, 'user_id' => 6),
            // publication 10 ( 3 dupliquee )
            array('id' => 21, 'position' => 1, 'publication_id' => 10, 'user_id' => 1),
            array('id' => 22, 'position' => 3, 'publication_id' => 10, 'user_id' => 2),
            array('id' => 23, 'position' => 2, 'publication_id' => 10, 'user_id' => 3),
        ));
    }
}

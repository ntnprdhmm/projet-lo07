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
        DB::table('auteurs')->insert(
            [
                // publication 1
                ['id' => 1, 'position' => 2, 'publication_id' => 1, 'user_id' => 4],
                ['id' => 2, 'position' => 1, 'publication_id' => 1, 'user_id' => 6],
                // publication 2
                ['id' => 3, 'position' => 1, 'publication_id' => 2, 'user_id' => 2],
                // publication 3
                ['id' => 4, 'position' => 2, 'publication_id' => 3, 'user_id' => 1],
                ['id' => 5, 'position' => 3, 'publication_id' => 3, 'user_id' => 2],
                ['id' => 6, 'position' => 1, 'publication_id' => 3, 'user_id' => 3],
                // publication 4
                ['id' => 7, 'position' => 1, 'publication_id' => 4, 'user_id' => 4],
                ['id' => 8, 'position' => 2, 'publication_id' => 4, 'user_id' => 5],
                // publication 5
                ['id' => 9, 'position' => 1, 'publication_id' => 5, 'user_id' => 1],
                // publication 6
                ['id' => 10, 'position' => 1, 'publication_id' => 6, 'user_id' => 3],
                ['id' => 11, 'position' => 2, 'publication_id' => 6, 'user_id' => 4],
                //publication 7
                ['id' => 12, 'position' => 1, 'publication_id' => 7, 'user_id' => 1],
                ['id' => 13, 'position' => 2, 'publication_id' => 7, 'user_id' => 2],
                ['id' => 14, 'position' => 3, 'publication_id' => 7, 'user_id' => 4],
                // publication 8
                ['id' => 15, 'position' => 2, 'publication_id' => 8, 'user_id' => 1],
                ['id' => 16, 'position' => 1, 'publication_id' => 8, 'user_id' => 3],
                // publication 9
                ['id' => 17, 'position' => 1, 'publication_id' => 9, 'user_id' => 1],
                ['id' => 18, 'position' => 3, 'publication_id' => 9, 'user_id' => 2],
                ['id' => 19, 'position' => 3, 'publication_id' => 9, 'user_id' => 4],
                ['id' => 20, 'position' => 2, 'publication_id' => 9, 'user_id' => 6],
                // publication 10 ( 3 dupliquee )
                ['id' => 21, 'position' => 1, 'publication_id' => 10, 'user_id' => 1],
                ['id' => 22, 'position' => 3, 'publication_id' => 10, 'user_id' => 2],
                ['id' => 23, 'position' => 2, 'publication_id' => 10, 'user_id' => 3],
            ]
        );
    }
}

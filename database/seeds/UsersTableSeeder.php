<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mdp = okokok
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'nom' => 'Tixier',
                    'prenom' => 'Matthieu',
                    'organisation' => 'ICD',
                    'laboratoire' => 'TechCICO',
                    'login' => 'matix',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
                [
                    'id' => 2,
                    'nom' => 'Benel',
                    'prenom' => 'Aurelien',
                    'organisation' => 'ICD',
                    'laboratoire' => 'TechCICO',
                    'login' => 'abenel',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
                [
                    'id' => 3,
                    'nom' => 'Lemercier',
                    'prenom' => 'Marc',
                    'organisation' => 'ICD',
                    'laboratoire' => 'ERA',
                    'login' => 'memer',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
                [
                    'id' => 4,
                    'nom' => 'Lecun',
                    'prenom' => 'Yann',
                    'organisation' => 'Facebook',
                    'laboratoire' => 'FAIR',
                    'login' => 'lecun',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
                [
                    'id' => 5,
                    'nom' => 'Di Loretto',
                    'prenom' => 'Ines',
                    'organisation' => 'ICD',
                    'laboratoire' => 'Tech-CICO',
                    'login' => 'ines',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
                [
                    'id' => 6,
                    'nom' => 'Nigro',
                    'prenom' => 'Jean Marc',
                    'organisation' => 'ICD',
                    'laboratoire' => 'LM2S',
                    'login' => 'jmnigro',
                    'password' => '$2a$04$34lTl3puezeHDYb.lW4wYuvcYtv38H/CqdleUATtrqTBVwqOnI2yi',
                ],
            ]
        );
    }
}

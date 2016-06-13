<?php

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert(
            [
                [
                    'id' => 1,
                    'titre' => "L'IA, c'est cool",
                    'categorie_id' => 'CF',
                    'annee' => 2016,
                    'nb_update' => 0,
                    "lieu" => "Salle des fêtes de Troyes",
                ],
                [
                    'id' => 2,
                    'titre' => "J'ai pas trouve de titre",
                    'categorie_id' => 'TD',
                    'annee' => 2016,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 10,
                    'titre' => "J'ai pas trouve de titre",
                    'categorie_id' => 'TD',
                    'annee' => 2016,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 3,
                    'titre' => 'Principes mathématiques de la philosophie naturelle',
                    'categorie_id' => 'OS',
                    'annee' => 2015,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 4,
                    'titre' => 'Un, deux, trois. . . l\'infini',
                    'categorie_id' => 'TD',
                    'annee' => 2015,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 5,
                    'titre' => "Qu'est ce que la vie ?",
                    'categorie_id' => 'AP',
                    'annee' => 2014,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 6,
                    'titre' => 'Le velo qui pedale tout seul',
                    'categorie_id' => 'BV',
                    'annee' => 2014,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                [
                    'id' => 7,
                    'titre' => "Sommes nous seuls dans l'univers",
                    'categorie_id' => 'CF',
                    'annee' => 2013,
                    'nb_update' => 0,
                    "lieu" => "Plage de Marseille",
                ],
                [
                    'id' => 8,
                    'titre' => 'La teleportation pour les nuls',
                    'categorie_id' => 'OS',
                    'annee' => 2013,
                    'nb_update' => 0,
                    "lieu" => null,
                ],
                ['id' => 9, 'titre' => "Le web", 'categorie_id' => 'OS', 'annee' => 2010, 'nb_update' => 0, "lieu" => null],
            ]
        );
    }
}

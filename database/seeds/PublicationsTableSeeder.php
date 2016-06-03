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
        DB::table('publications')->insert(array(
            array('id' => 1, 'titre' => "L'IA, c'est cool", 'categorie_id' => 'CF', 'annee' => 2016, "lieu" => "Salle des fêtes de Troyes"),
            array('id' => 2, 'titre' => "J'ai pas trouve de titre", 'categorie_id' => 'TD', 'annee' => 2016, "lieu" => null),
            array('id' => 10, 'titre' => "J'ai pas trouve de titre", 'categorie_id' => 'TD', 'annee' => 2016, "lieu" => null),
            array('id' => 3, 'titre' => 'Principes mathématiques de la philosophie naturelle', 'categorie_id' => 'OS', 'annee' => 2015, "lieu" => null),
            array('id' => 4, 'titre' => 'Un, deux, trois. . . l\'infini', 'categorie_id' => 'TD', 'annee' => 2015, "lieu" => null),
            array('id' => 5, 'titre' => "Qu'est ce que la vie ?", 'categorie_id' => 'AP', 'annee' => 2014, "lieu" => null),
            array('id' => 6, 'titre' => 'Le velo qui pedale tout seul', 'categorie_id' => 'BV', 'annee' => 2014, "lieu" => null),
            array('id' => 7, 'titre' => "Sommes nous seuls dans l'univers", 'categorie_id' => 'CF', 'annee' => 2013, "lieu" => "Plage de Marseille"),
            array('id' => 8, 'titre' => 'La teleportation pour les nuls', 'categorie_id' => 'OS', 'annee' => 2013, "lieu" => null),
            array('id' => 9, 'titre' => "Le web", 'categorie_id' => 'OS', 'annee' => 2010, "lieu" => null)
        ));
    }
}

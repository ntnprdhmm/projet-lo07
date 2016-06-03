<?php

use Illuminate\Database\Seeder;

class LaboratoiresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratoires')->insert(array(
            array('slug' => 'CREIDD', 'name' => 'Centre de Recherches et d\'Etudes Interdisciplinaires sur le Développement Durable'),
            array('slug' => 'ERA', 'name' => 'Environnement de Réseaux Autonomes'),
            array('slug' => 'GAMMA3', 'name' => 'Génération Automatique de Maillage et Méthodes Avancées'),
            array('slug' => 'LASMIS', 'name' => 'Systèmes Mécaniques et Ingénierie Simultanée'),
            array('slug' => 'LM2S', 'name' => 'Modélisation et Sûreté des Systèmes'),
            array('slug' => 'LNIO', 'name' => 'Nanotechnologie et Instrumentation Optique'),
            array('slug' => 'LSIO', 'name' => 'Optimisation des Systèmes Industriels'),
            array('slug' => 'Tech-CICO', 'name' => 'Technologies pour la Coopération, l\'Interaction et les COnnaissances dans les collectifs')
        ));
    }
}

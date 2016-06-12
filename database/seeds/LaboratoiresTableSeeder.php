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
        DB::table('laboratoires')->insert(
            [
                [
                    'slug' => 'CREIDD',
                    'name' => 'Centre de Recherches et d\'Etudes Interdisciplinaires sur le Développement Durable',
                ],
                ['slug' => 'ERA', 'name' => 'Environnement de Réseaux Autonomes'],
                ['slug' => 'GAMMA3', 'name' => 'Génération Automatique de Maillage et Méthodes Avancées'],
                ['slug' => 'LASMIS', 'name' => 'Systèmes Mécaniques et Ingénierie Simultanée'],
                ['slug' => 'LM2S', 'name' => 'Modélisation et Sûreté des Systèmes'],
                ['slug' => 'LNIO', 'name' => 'Nanotechnologie et Instrumentation Optique'],
                ['slug' => 'LSIO', 'name' => 'Optimisation des Systèmes Industriels'],
                [
                    'slug' => 'Tech-CICO',
                    'name' => 'Technologies pour la Coopération, l\'Interaction et les COnnaissances dans les collectifs',
                ],
            ]
        );
    }
}

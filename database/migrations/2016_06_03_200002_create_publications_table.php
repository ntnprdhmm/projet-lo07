<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('categorie_id');
            $table->foreign('categorie_id')
                ->references('slug')
                ->on('categories');
            $table->integer('annee');
            $table->string('lieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publications', function($table)
        {
            $table->dropForeign('publications_categorie_id_foreign');
        });
        Schema::drop('publications');
    }
}

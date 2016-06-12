<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'auteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position');
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')
                ->references('id')
                ->on('publications');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'auteurs', function ($table) {
            $table->dropForeign('auteurs_user_id_foreign');
            $table->dropForeign('auteurs_publication_id_foreign');
        }
        );
        Schema::drop('auteurs');
    }
}

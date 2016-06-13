<?php

use Illuminate\Database\Migrations\Migration;

class AddIsAdminField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'users', function ($table) {
            $table->boolean('is_admin')->default(false);
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
            'users', function ($table) {
            $table->dropColumn('is_admin');
        }
        );
    }
}

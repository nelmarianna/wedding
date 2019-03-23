<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDefaultsGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('guests', function ($table) {
        $table->integer('response')->default(0)->change();
        $table->string('phone')->default('')->change();
        $table->string('otherDiet')->default('')->change();
        $table->boolean('vegetarian')->default(false)->change();
        $table->boolean('plusOne')->default(false)->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

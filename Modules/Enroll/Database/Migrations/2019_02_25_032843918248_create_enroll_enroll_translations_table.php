<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollEnrollTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll__enroll_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('enroll_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['enroll_id', 'locale']);
            $table->foreign('enroll_id')->references('id')->on('enroll__enrolls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enroll__enroll_translations', function (Blueprint $table) {
            $table->dropForeign(['enroll_id']);
        });
        Schema::dropIfExists('enroll__enroll_translations');
    }
}

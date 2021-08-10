<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedigreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedigrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('origin');

            $table->bigInteger('id_animal')->unsigned();
            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedigrees');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type_acquisition');
            $table->string('code_microchip');
            $table->string('size');
            $table->string('sex');
            $table->boolean('active');
            $table->string('reason_inactivation');
            $table->dateTime('date_birth');
            $table->dateTime('data_registration');

            $table->bigInteger('id_owner')->unsigned();
            $table->foreign('id_owner')->references('id')->on('owners')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_specie')->unsigned();
            $table->foreign('id_specie')->references('id')->on('species')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_accredited_responsible')->unsigned();
            $table->foreign('id_accredited_responsible')->references('id')->on('accrediteds')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('animals');
    }
}

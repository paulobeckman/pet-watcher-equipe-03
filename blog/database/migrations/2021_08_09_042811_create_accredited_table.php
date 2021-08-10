<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccreditedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accredited', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('cnpj');
                    $table->string('ins_estadual');
                    $table->string('razao_social');
                    $table->string('tel');
                    $table->string('email');
                    $table->string('end');
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
        Schema::dropIfExists('accredited');
    }
}

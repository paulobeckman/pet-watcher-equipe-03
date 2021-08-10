<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->TimeStamp('data_licenca');
                    $table->TimeStamp('data_venc');
                    $table->TimeStamp('data_revog')->nullable();

                    $table->bigInteger('id_accredited');
                    $table->foreign('id')->references('id')->on('accredited')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('licenses');
    }
}

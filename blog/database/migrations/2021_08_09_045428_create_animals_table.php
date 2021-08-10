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
                $table->BigInteger('id');
                $table->string('nome');
                $table->string('tipo_aquisicao');
                $table->string('cod_microchip');
                $table->string('porte');
                $table->string('sexo');
                $table->boolean('ativo');
                $table->string('motivo_inativacao');
                $table->TimeStamp('data_nascimento');
                $table->TimeStamp('data_cadastro');

                $table->bigInteger('id_accredited');
                $table->foreign('id_accredited')->references('id')->on('accredited')->onDelete('cascade')->onUpdate('cascade');
                $table->bigInteger('id_specie');
                $table->foreign('id_specie')->references('id')->on('species')->onDelete('cascade')->onUpdate('cascade');
                $table->bigInteger('id_credenciada_responsavel');
                $table->foreign('id_accredited')->references('id')->on('accredited')->onDelete;


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

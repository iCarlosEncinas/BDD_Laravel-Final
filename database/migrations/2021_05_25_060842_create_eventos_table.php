<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            
            $table->date('fecha');
            $table->integer('numero_de_participantes');
            $table->float('duracion');
            $table->string('equipamiento');
            $table->integer('numero_de_comisarios');


            $table->unsignedBigInteger('complejo_id')->nullable();

            $table->foreign('complejo_id')
                ->references('id')
                ->on('complejos')
                ->onDelete('set null');
            

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
        Schema::dropIfExists('eventos');
    }
}

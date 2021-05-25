<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisarios', function (Blueprint $table) {
            $table->id();
            
            $table->string('tipo_de_comisario');

            $table->unsignedBigInteger('evento_id')->nullable();

            $table->foreign('evento_id')
                ->references('id')
                ->on('eventos')
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
        Schema::dropIfExists('comisarios');
    }
}

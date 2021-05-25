<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complejos', function (Blueprint $table) {
            $table->id();
            
            $table->string('jefe');
            $table->string('localizacion');
            $table->float('area');
            $table->string('polideportivo');
            $table->string('unideportivo');
            
            $table->unsignedBigInteger('sede_id')->nullable();

            $table->foreign('sede_id')
                ->references('id')
                ->on('sedes')
                ->onDelete('set null');

            $table->unsignedBigInteger('deportivo_id')->unique();

            $table->foreign('deportivo_id')
                ->references('id')
                ->on('deportivos')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('complejos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kardex', function (Blueprint $table) {
            $table->bigIncrements('idKardex')->primary();
            $table->fecha('date');
            $table->string('rac',23);
            $table->integer('posicion');
            $table->boolean('disponibilidad');//tiene que ser booleano
            $table->integer('estiba_idEstiba')->unsigned();
            $table->foreign('estiba_idEstiba')->references('idEstiba')->on('estiba');
            $table->primary(['idKardex', 'estiba_idEstiba']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kardex');
    }
};

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
        Schema::create('estiba', function (Blueprint $table) {
            $table->bigIncrements('idEstiba')->primary();
            $table->integer('cantidad')->unsigned();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('producto_item', 45);
            $table->foreign('producto_item')->references('item')->on('producto');
            $table->index('producto_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estiba');
    }
};

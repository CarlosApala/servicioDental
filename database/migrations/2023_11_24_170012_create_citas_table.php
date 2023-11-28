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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('medico')->onDelete('cascade');
            $table->unsignedBigInteger('servicios_id');
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->string('motivo',200);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};

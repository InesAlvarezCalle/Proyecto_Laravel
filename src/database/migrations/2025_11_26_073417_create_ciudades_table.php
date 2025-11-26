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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255)->notNullable();
            $table->string('pais', 255)->notNullable();
            $table->integer('poblecion')->notNullable();
            $table->string('zona_horaria', 255)->notNullable();
            $table->decimal('latitud')->notNullable();
            $table->decimal('longitud')->notNullable();
            $table->integer('elevacion')->notNullable();
            $table->integer('anyo_fundacion')->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};

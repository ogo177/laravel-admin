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
        Schema::create('voyage_nationals', function (Blueprint $table) {
            $table->id();
            $table->string('nom_voyage');
            $table->integer('nombre_personne');
            $table->date('date_voyage');
            $table->longText('description');
            $table->decimal('prix');
            $table->string('photo');
            $table->longText('programme_detaille');
            $table->longText('info_pratique');
            $table->integer('nombre_jours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyage_national');
    }
};

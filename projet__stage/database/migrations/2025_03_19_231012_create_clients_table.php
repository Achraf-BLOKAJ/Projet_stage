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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('entrepriseName');
            $table->date('dateDemande');
            $table->string('origineDemande');
            $table->string('contact');
            $table->string('typeBesoin');
            $table->string('categorieBesoin');
            $table->string('natureService');
            $table->string('marchandiz');
            $table->string('nomCommerciale');
            $table->date('dateVisite');
            $table->string('typeCadence');
            $table->string('detailService');
            $table->string('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

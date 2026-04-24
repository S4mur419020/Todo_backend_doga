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
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('kat_id')->references('id')->on('kategoriaks')->onDelete('cascade');
            $table->string('tev_nev');
            $table->boolean('allapot')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};

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
        Schema::create('kampanyalars', function (Blueprint $table) {
            $table->id();
            $table->string('kampanya_baslik', 255)->nullable();
            $table->string('kampanya_aciklama', 255)->nullable();
            $table->string('kampanya_gorsel', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampanyalars');
    }
};

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
        Schema::create('ek_ozelliks', function (Blueprint $table) {
            $table->id();
            $table->integer('mini_paket')->nullable();
            $table->integer('orta_paket')->nullable();
            $table->integer('tam_paket')->nullable();
            $table->integer('genc_surucu')->nullable();
            $table->integer('ek_surucu')->nullable();
            $table->integer('cocuk_koltugu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ek_ozelliks');
    }
};

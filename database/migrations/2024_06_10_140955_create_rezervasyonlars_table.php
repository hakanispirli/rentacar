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
        Schema::create('rezervasyonlars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('arac_id');
            $table->date('alis_tarihi');
            $table->time('alis_saati');
            $table->date('teslim_tarihi');
            $table->time('teslim_saati');
            $table->enum('rezerve_durum', ['bekliyor', 'onaylandı'])->default('bekliyor')->comment('0=Bekliyor, 1=Onaylandı');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezervasyonlars');
    }
};

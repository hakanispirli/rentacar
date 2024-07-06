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
        Schema::create('araclars', function (Blueprint $table) {
            $table->id();
            $table->string('arac_adi', 255)->nullable();
            $table->string('arac_vites', 255)->nullable();
            $table->string('arac_yakit', 255)->nullable();
            $table->string('arac_depozito', 255)->nullable();
            $table->integer('arac_kapasite')->nullable();
            $table->integer('arac_yas_siniri')->nullable();
            $table->integer('arac_km_limiti')->nullable();
            $table->string('arac_sinif', 255)->nullable();
            $table->string('arac_marka', 255)->nullable();
            $table->string('arac_plaka', 255)->nullable();
            $table->integer('arac_fiyat')->nullable();
            $table->string('arac_gorsel', 255)->nullable();
            $table->enum('arac_durum', ['0', '1', '2'])->default('0')->comment('0=Aktif, 1=Rezerve, 2=Bakımda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('araclars');
    }
};

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
        Schema::create('tianaf', function (Blueprint $table) {
            $table->string('Nama');
            $table->char('No_HP');
            $table->string('Alamat');
            $table->string('Jenis_Tiket');
            $table->string('Harga');
            $table->char('Jumlah_Tiket');
            $table->string('Total_Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tianaf');
    }
};

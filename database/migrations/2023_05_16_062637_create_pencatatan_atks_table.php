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
        Schema::create('pencatatan_atks', function (Blueprint $table) {
            $table->id();
            $table->string("nama_barang");
            $table->string("satuan");
            $table->string("harga_barang");
            $table->integer("jumlah");
            $table->string("sumber_dana");
            $table->string("pj");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencatatan_apks');
    }
};

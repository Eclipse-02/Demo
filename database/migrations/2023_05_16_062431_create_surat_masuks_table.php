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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string("pengirim");
            $table->date("tanggal_surat");
            $table->string("kode_surat");
            $table->string("urut_surat");
            $table->string("lembaga_surat");
            $table->string("bulan_surat");
            $table->integer("tahun_surat");
            $table->string("no_surat");
            $table->string("perihal");
            $table->text("isi_surat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};

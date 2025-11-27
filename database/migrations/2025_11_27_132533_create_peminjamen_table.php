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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            // relasi ke guru
            $table->foreignId('guru_id')->constrained('gurus')->cascadeOnDelete();

            // relasi ke barang
            $table->foreignId('item_id')->constrained('items')->cascadeOnDelete();

            // relasi ke kelas
            $table->foreignId('class_id')->constrained('classes')->cascadeOnDelete();

            // atribut relasi
            $table->integer('kuantitas_peminjaman');

            $table->date('waktu_peminjaman');
            $table->date('waktu_pengembalian')->nullable();
            $table->date('waktu_kembali_aktual')->nullable();

            $table->string('status')->default('dipinjam');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};

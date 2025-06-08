<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tingkat_kamars', function (Blueprint $table) {
            $table->id('id_kamar'); // PK
            $table->string('nomor_kamar')->unique();
            $table->integer('lantai');
            $table->enum('status', ['reguler', 'vip', 'vvip', 'kelas 1', 'kelas 2', 'kelas 3'])->default('reguler'); // Status kamar
            $table->unsignedBigInteger('id_tipe'); // FK
            $table->foreign('id_tipe')
                ->references('id_tipe')
                ->on('tipe_kamars')
                ->onDelete('cascade');
            $table->softDeletes(); // Untuk menyimpan waktu penghapusan soft delete
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::table('tingkat_kamars', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['id_tipe']);
        });
        Schema::dropIfExists('tingkat_kamars');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tingkat_kamars', function (Blueprint $table) {
            $table->id('id_kamar'); // Primary Key
            $table->string('nomor_kamar');
            $table->integer('lantai');
            $table->enum('status', ['reguler', 'vip', 'vvip', 'kelas 1', 'kelas 2', 'kelas 3']);
            $table->unsignedBigInteger('id_tipe'); // Foreign Key
            $table->foreign('id_tipe')->references('id_tipe')->on('tipe_kamars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tingkat_kamars');
    }
};

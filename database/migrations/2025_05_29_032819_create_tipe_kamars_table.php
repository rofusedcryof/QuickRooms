<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipe_kamars', function (Blueprint $table) {
            $table->id('id_tipe'); //PK
            $table->enum('jenis', ['single', 'double', 'twin', 'suite', 'family']); // Single, Double, dll
            $table->text('deskripsi')->nullable();
            $table->integer('kapasitas');
            $table->decimal('harga', 12, 2); //harga kamar
            $table->text('fasilitas')->nullable(); //fasilitas kamar
            $table->string('foto')->nullable(); //file foto kamar
            $table->unsignedBigInteger('id_hotel');

            $table->foreign('id_hotel')->references('id_hotel')->on('hotels')->onDelete('cascade');
            $table->softDeletes(); //menyimpan waktu penghapusan soft delete
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipe_kamars');
    }
};

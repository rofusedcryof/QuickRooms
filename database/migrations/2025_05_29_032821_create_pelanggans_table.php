<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('id_pelanggan'); // PK
            $table->unsignedBigInteger('id_hotel')->nullable();//FK
            $table->unsignedBigInteger('id_user')->nullable();//FK
            $table->timestamps();

            // Foreign key sesuai PK di users
            $table->foreign('id_user')
                ->references('id_user')->on('users')
                ->onDelete('set null')->onUpdate('cascade'); 
            $table->foreign('id_hotel')->references('id_hotel')->on('hotels')->onDelete('set null')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['id_user']);
        });

         // Hapus tabel pelanggans
        Schema::dropIfExists('pelanggans');
    }
};

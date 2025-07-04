<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'karyawan', 'pelanggan'])->default('pelanggan');
            $table->string('no_hp')->nullable();
            $table->text('alamat')->nullable();
            $table->unsignedBigInteger('id_hotel')->nullable();

            $table->foreign('id_hotel')->references('id_hotel')->on('hotels')->onDelete('set null');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

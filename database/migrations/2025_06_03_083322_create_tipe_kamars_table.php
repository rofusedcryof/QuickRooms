<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipe_kamars', function (Blueprint $table) {
            $table->id('id_tipe'); // Primary Key
            $table->string('jenis'); // Single, Double, dll
            $table->text('deskripsi')->nullable();
            $table->integer('kapasitas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipe_kamars');
    }
};

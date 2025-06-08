<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('id_pelanggan');//auto increment
            $table->unsignedBigInteger('id_user')->nullable(); // relasi dgn user
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('no_hp', 20)->unique();
            $table->text('alamat');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_user')
                ->references('id_user')->on('users')
                ->onDelete('set null') // jika user dihapus, id_user di tabel ini akan diset null
                ->onUpdate('cascade'); // jika id_user di tabel users diupdate, akan terupdate juga di sini
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

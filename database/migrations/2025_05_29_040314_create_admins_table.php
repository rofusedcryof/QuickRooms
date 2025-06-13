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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin');
            $table->unsignedBigInteger('id_user')->unique()->nullable(); // Relasi dengan tabel users
            $table->string('nama', 100);
            $table->string('password');
            $table->string('email', 100)->unique();
            $table->string('no_hp', 20)->nullable();
            $table->softDeletes(); // untuk menyimpan waktu penghapusan soft delete
            $table->timestamps();

            //fk constraint
            $table->foreign('id_user')
                ->references('id_user')->on('users')
                ->onDelete('set null') // jika user dihapus, id_user di tabel ini akan diset null
                ->onUpdate('cascade'); // jika id_user di tabel users diupdate, akan terupdate juga di sini
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        schema::table('admins', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['id_user']);
        });
        Schema::dropIfExists('admins');
    }
};

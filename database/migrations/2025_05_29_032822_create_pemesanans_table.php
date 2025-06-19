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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_kamar');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->enum('status', ['booking', 'Lunas'])->default('booking');
            $table->decimal('total_harga', 12, 2);
            $table->text('catatan')->nullable(); // Catatan tambahan untuk pemesanan
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_pelanggan')
                ->references('id_pelanggan')->on('pelanggans')
                ->onDelete('restrict'); // Tidak boleh menghapus pelanggan jika ada pemesanan yang terkait
            $table->foreign('id_kamar')
                ->references('id_kamar')->on('tingkat_kamars')
                ->onDelete('restrict');

            $table->foreignId('id_tipe')->constrained('tipe_kamars', 'id_tipe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            // Hapus foreign key constraint sebelum menghapus tabel
            $table->dropForeign(['id_pelanggan']);
            $table->dropForeign(['id_kamar']);
        });
        Schema::dropIfExists('pemesanans');
    }
};

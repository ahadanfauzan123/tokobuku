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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->char('id_penjualan');
            $table->char('id_user');
            $table->string('nama_buku')->nullable(false);
            $table->integer('harga')->nullable(false);
            $table->integer('qty')->nullable(false);
            $table->timestamps();
            $table->primary('id_penjualan');
            $table->foreign('id_user')->references('id_user')->on('users')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans', function (Blueprint $table) {
            $table->dropForeign('id_user');
            $table->dropColumn('id_user');
        });

    }
};

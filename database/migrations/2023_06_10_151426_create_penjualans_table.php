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
            $table->char('id_user')->foreign('id_user')->references('id_user')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nama_buku')->nullable(false);
            $table->integer('harga')->nullable(false);            
            $table->integer('qty')->nullable(false);            
            $table->timestamps();
            $table->primary('id_penjualan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans', function (Blueprint $table) {
            $table->dropForeign('id_user');
            // $table->dropIndex('lists_user_id_index');
            $table->dropColumn('id_user');
        });
        
    }
};

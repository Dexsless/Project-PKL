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
        Schema::create('tabungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('foto');
            $table->integer('jumlah_tabungan');
            $table->integer('nominal')->nullable();
            $table->boolean('status')->default(0);
            // $table->foreignId('id_user')->onDelete('cascade')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabungans');
    }
};

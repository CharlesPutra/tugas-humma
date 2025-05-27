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
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerja');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_cabang');
            $table->timestamps();

            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('id_cabang')->references('id')->on('cabangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjas');
    }
};

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
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kategori_id')->constrained('kategori_proyek', 'id')->onDelete('cascade');
            $table->string('deskripsi');
            $table->text('detail');
            $table->string('thumbnail');
            $table->string('vidio')->nullable();
            $table->text('slug');
            $table->foreignId('karyawan_id')->constrained('karyawan', 'id')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};

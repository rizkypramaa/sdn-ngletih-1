<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sarpras', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('icon')->nullable();
            $table->text('deskripsi');

            $table->string('gambar')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();

            $table->integer('urutan')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sarpras');
    }
};
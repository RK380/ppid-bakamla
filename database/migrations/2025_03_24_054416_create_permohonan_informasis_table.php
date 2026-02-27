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
        Schema::create('permohonan_informasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('rincian');
            $table->text('tujuan');
            $table->enum('mendapat', ['Soft Copy', 'Hard Copy']);
            $table->enum('cara', ['Mengambil Langsung', 'Online By System']);
            $table->boolean('status');
            $table->text('alasan_tolak')->nullable();
            $table->foreignId('petugas_id')->nullable();
            $table->text('pesan')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_informasis');
    }
};

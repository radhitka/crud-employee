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
        //
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nomor');
            $table->string('jabatan');
            $table->string('departmen');
            $table->date('tanggal_masuk');
            $table->string('foto');
            $table->enum('status', ['kontrak', 'probration', 'tetap']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('employee');
    }
};

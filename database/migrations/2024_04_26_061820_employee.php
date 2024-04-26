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
            $table->string('nama')->nullable();
            $table->string('nomor')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('departmen')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['kontrak', 'probation', 'tetap'])->nullable();
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

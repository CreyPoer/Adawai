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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisi_id')->constrained('divisis')->onUpdate('cascade')->onDelete('restrict');
            $table->string('name');
            $table->string('nip')->unique();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('no_telepon')->unique();
            $table->string('email')->unique();
            $table->text('alamat');
            $table->enum('marital_status', ['Belum Menikah', 'Menikah','Janda','Duda']);
            $table->enum('education',['SMA', 'D3', 'S1', 'S2', 'S3']);
            $table->integer('sallary');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

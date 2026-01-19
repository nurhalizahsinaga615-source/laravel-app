<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_menu', function (Blueprint $table) {
            $table->bigIncrements('id_menu');
            $table->unsignedBigInteger('pelanggan_id');
            $table->string('nama_menu', 100);
            $table->decimal('harga');
            $table->timestamps();

            $table->foreign('pelanggan_id')
                  ->references('id_pelanggan')
                  ->on('tb_pelanggan')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_menu');
    }
};

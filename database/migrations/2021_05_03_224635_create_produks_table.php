<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(100000);
            $table->integer('harga_namaset')->nullable();
            $table->boolean('is_ready')->default(true);
            $table->string('jenis')->default('Replika ori top quality');
            $table->float('berat')->default(0.25);
            $table->string('gambar');
            $table->integer('liga_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}

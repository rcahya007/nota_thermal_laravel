<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->integer('id_category_barang')->unsigned();
            $table->integer('stok_barang');
            $table->text('deskripsi_barang');
            $table->string('foto_barang');
            $table->timestamps();
        });
        Schema::table('barang', function ($table) {
            $table->foreign('id_category_barang')->references('id_category')->on('category_barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}

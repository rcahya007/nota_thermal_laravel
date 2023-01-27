<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('id_transaction')->unsigned();
            $table->string('nama_barang');
            $table->integer('banyak_barang');
            $table->float('harga_barang');
            $table->float('total_harga_barang');
            $table->timestamps();
        });

        Schema::table('detail_transactions', function ($table) {
            $table->foreign('id_transaction')->references('id')->on('transactions')->onDelete('cascade');;
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
}

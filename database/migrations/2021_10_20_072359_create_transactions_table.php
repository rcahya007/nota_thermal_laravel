<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->float('total_semua');
            $table->integer('uang_bayar');
            $table->float('uang_kembali');
            $table->string('nama_pembeli');
            $table->string('pembuat');
            $table->string('metode_pembayaran');
            $table->string('jenis_transaksi');
            $table->string('bukti_tf');
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
        Schema::dropIfExists('transactions');
    }
}

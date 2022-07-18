<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpinjam', function (Blueprint $table) {
            $table->integer('no_pinjam')->primary();
            $table->date('tanggal');
            $table->foreignId('no_anggota');
            $table->integer('jmlpinjam');
            $table->foreignId('kodeksr');
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
        Schema::dropIfExists('tblpinjam');
    }
}

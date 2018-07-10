<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat')->unique();
            $table->date('tgl_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->string('tertuju');
            $table->unsignedinteger('id_instansis');
            $table->foreign('id_instansis')->references('id')->on('instansis')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('alamat');
            $table->unsignedinteger('id_disposisi');
            $table->foreign('id_disposisi')->references('id')->on('disposisi')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('ket_disposisi');
            $table->string('file');
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
        Schema::dropIfExists('surat_keluar');
    }
}

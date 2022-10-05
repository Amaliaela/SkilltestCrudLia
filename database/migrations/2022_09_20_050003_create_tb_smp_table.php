<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_smp', function (Blueprint $table) {
            $table->id();
            $table->string('Npsn');
            $table->string('NamaSekolah');
            $table->string('Alamat');
            $table->string('Akreditasi');
            $table->string('Email');
            $table->string('image');
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
        Schema::dropIfExists('tb_smp');
    }
}

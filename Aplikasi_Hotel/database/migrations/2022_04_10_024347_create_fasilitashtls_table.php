<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitashtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitashtls', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fasilitashtl');
            $table->string('foto_fasilitashtl');
            $table->text('deskripsi_fasilitashtl');
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
        Schema::dropIfExists('fasilitashtls');
    }
}

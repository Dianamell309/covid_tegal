<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCoustumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coustumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_coustomer');
            $table->string('alamat');
            $table->date('tgllahir');
            $table->string('status');
            $table->string('username');
            $table->string('password');
            $table->string('photo');
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
        Schema::dropIfExists('coustumers');
    }
}

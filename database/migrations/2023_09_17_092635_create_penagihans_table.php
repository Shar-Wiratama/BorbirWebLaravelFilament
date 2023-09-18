<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penagihans', function (Blueprint $table) {
            $table->id();
            $table->integer('updated_meter');
            $table->string('photo');
            $table->integer('total_payment');
            $table->enum('status',['Diterima','Ditolak']);
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
        Schema::dropIfExists('penagihans');
    }
};

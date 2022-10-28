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
        Schema::create('bajus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipe')->constrained('pakaians');
            $table->string('ukuran');
            $table->string('warna');
            $table->integer('jumlah');
            $table->timestamps();
            // $table->foreign('tipe')->references('id')->on('pakaians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bajus');
    }
};

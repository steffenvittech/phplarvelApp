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
        Schema::create('btc_tricker', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->float("ask");
            $table->float("bid");
            $table->float("volume");
            $table->float("price");
            $table->float("size");
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
        Schema::dropIfExists('btc_tricker');
    }
};

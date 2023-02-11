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
        Schema::create('conforts', function (Blueprint $table) {
            $table->id();
            $table->string('Piscine');
            $table->string('wifi');
            $table->string('canal')->unique();
            $table->integer('climatisation')->default('0');
            $table->string('baignoire');
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
        Schema::dropIfExists('conforts');
    }
};

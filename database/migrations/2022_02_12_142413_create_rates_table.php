<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('prokolper_no');
            $table->string('tener_no');
            $table->string('year');
            $table->string('nothi_no');
            $table->string('shangrahik_no');
            $table->string('date');
            $table->string('tahabil');
            $table->string('notice');
            $table->string('group_no');
            $table->string('amount');
            $table->string('word_no');
            $table->string('upozila_id');
            $table->string('kajer_prokity');
            $table->string('project_notice');
            $table->string('prokolper_rate');
            $table->string('prokolper_list');
          
            $table->string('thikadar_id');
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
        Schema::dropIfExists('rates');
    }
}

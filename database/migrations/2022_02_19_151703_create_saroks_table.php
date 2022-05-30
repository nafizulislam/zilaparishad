<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaroksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saroks', function (Blueprint $table) {
            $table->id();
            $table->string('upozela_id')->nullable();
            $table->string('arthabachar_id')->nullable();
            $table->string('nothi_no')->nullable();
            $table->string('collective_number')->nullable();
            $table->string('minister_number')->nullable();
            $table->string('date')->nullable();
            $table->string('tahabil')->nullable();
            $table->string('notice_no')->nullable();
            $table->string('group_no')->nullable();
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
        Schema::dropIfExists('saroks');
    }
}

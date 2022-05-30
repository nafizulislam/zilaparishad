<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('nid')->nullable();
            $table->string('photo')->nullable();
            $table->string('authorise_person')->nullable();
            $table->string('authorise_person_mobile')->nullable();
            $table->string('authorise_person_nid')->nullable();
            $table->string('document')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('branch')->nullable();
            $table->string('project_id')->nullable();
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
        Schema::dropIfExists('pcis');
    }
}

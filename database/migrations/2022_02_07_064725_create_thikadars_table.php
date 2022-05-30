<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThikadarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thikadars', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('owner_nid');
            $table->string('photo');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('org_name');
            $table->string('org_address');
            $table->string('license');
            $table->string('bank_name');
            $table->string('bank_account');
            $table->string('branch');
            $table->string('license_date');
            $table->string('sarok_no');
            $table->string('documents');
            $table->string('rate_id');
          
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
        Schema::dropIfExists('thikadars');
    }
}

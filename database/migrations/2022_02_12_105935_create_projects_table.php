<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('pic_id')->nullable();
            $table->string('contractor_id')->nullable();
            $table->string('prokolpo_no')->nullable();
            $table->string('prokolpo_name')->nullable();
            $table->string('prokolpo_type')->nullable();
            $table->string('upozela')->nullable();
            $table->string('arthabachar')->nullable();
            $table->string('nothi_no')->nullable();
            $table->string('collective_number')->nullable();
            $table->string('minister_number')->nullable();
            $table->string('date')->nullable();
            $table->string('tahabil')->nullable();
            $table->string('notice_no')->nullable();
            $table->string('group_no')->nullable();
            $table->string('amount')->nullable();
            $table->string('prokolpo_notice')->nullable();
            $table->string('prokolpo_rate')->nullable();
            $table->string('prokolpo_list')->nullable();
            $table->string('prokolpo_exel')->nullable();
            $table->string('deskpass')->nullable();
            $table->string('OfficeAssistant')->nullable();
            $table->string('AssistantEngineer')->nullable();
            $table->string('SeniorEngineer')->nullable();
            $table->string('Sochib')->nullable();
            $table->string('MainOfficer')->nullable();
            $table->string('Chairman')->nullable();
            $table->string('SuperAdmin')->nullable();
            $table->string('application')->nullable();
            $table->string('application_date')->nullable();

            $table->string('prokolpo_exel')->nullable();
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
        
    }
}

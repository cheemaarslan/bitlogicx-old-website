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
        Schema::create('home_page_managers', function (Blueprint $table) {
            $table->id();
            $table->string('banner_heading');
            $table->text('banner_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_button_text');
            $table->string('banner_button_link');
            $table->boolean('banner_button_enable')->default(1);
            $table->boolean('enable_banner_section')->default(1);


            $table->string('project_heading');
            $table->integer('project_limit')->default(4);
            $table->boolean('enable_project_section')->default(1);

            $table->string('service_heading');
            $table->integer('service_limit')->default(4);
            $table->boolean('enable_service_section')->default(1);

            $table->string('process_heading');
            $table->integer('process_limit')->default(5);
            $table->boolean('enable_process_section')->default(1);

            $table->string('team_heading');
            $table->integer('team_limit')->default(4);
            $table->boolean('enable_team_section')->default(1);

            
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
        Schema::dropIfExists('home_page_managers');
    }
};

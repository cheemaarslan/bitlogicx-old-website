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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('project_name');
            $table->string('slug');
            $table->string('sub_description');
            $table->text('description');
            $table->string('date');
            $table->string('project_link')->nullable();
            $table->string('project_image')->default('images/default/default_image.jpg');
            // $table->string('banner_service_image')->default('images/default/default_image.jpg');
            $table->text('meta_tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_image')->default('images/default/default_image.jpg');
            $table->string('status')->default('Publish');
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
        Schema::dropIfExists('projects');
    }
};

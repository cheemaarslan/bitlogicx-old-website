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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_category_id')->nullable()->constrained('career_categories');
            $table->string('career_name')->unique();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->longText('body')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('careers');
    }
};

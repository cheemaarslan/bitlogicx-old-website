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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->string('author_name');
            $table->string('slug');
            $table->string('sub_description');
            $table->text('description');
            $table->date('date');
            $table->string('blog_image')->default('images/default/default_image.jpg');
            $table->string('author_image')->default('images/default/default_image.jpg');
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
        Schema::dropIfExists('blogs');
    }
};

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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            //General Setting
            $table->boolean('enable_news')->default(1);
            $table->boolean('enable_application')->default(1);
            $table->boolean('enable_contact')->default(1);
            //WhatsApp Setting
            $table->string('whatsapp_link')->nullable();
            $table->boolean('enable_whatsapp')->default(1);
            //Recaptcha Setting
            $table->string('NOCAPTCHA_SITEKEY')->nullable();
            $table->string('NOCAPTCHA_SECRET')->nullable();
            //SMTP Setting
            $table->string('MAIL_MAILER')->nullable();
            $table->string('MAIL_HOST')->nullable();
            $table->string('MAIL_PORT')->nullable();
            $table->string('MAIL_USERNAME')->nullable();
            $table->string('MAIL_PASSWORD')->nullable();
            $table->string('MAIL_ENCRYPTION')->nullable();
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
        Schema::dropIfExists('settings');
    }
};

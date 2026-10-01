<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('phone_label')->nullable();
            $table->string('email')->nullable();
            $table->string('email_label')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('atmosphere_title')->nullable();
            $table->text('atmosphere_body')->nullable();
            $table->string('gallery_title')->nullable();
            $table->string('cta_title')->nullable();
            $table->text('cta_body')->nullable();
            $table->string('cta_button_label')->nullable();
            $table->string('footer_kicker')->nullable();
            $table->string('footer_heading')->nullable();
            $table->text('footer_intro')->nullable();
            $table->string('chat_label')->nullable();
            $table->text('address')->nullable();
            $table->string('together_heading')->nullable();
            $table->string('together_link_label')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('x_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};

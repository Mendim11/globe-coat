<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->json('project_images')->nullable();
            $table->string('author')->nullable();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('status')->default('Draft');
            $table->timestamps();
        });

        Schema::create('blog_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('author');
            $table->string('status')->default('draft');
            $table->string('thumbnail_image')->nullable();
            $table->json('project_images')->nullable();
            $table->timestamps();
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->json('product_images')->nullable();
            $table->json('additional_information')->nullable();
            $table->timestamps();
        });

        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('image')->nullable();
            $table->text('personal_details')->nullable();
            $table->unsignedTinyInteger('business_growth')->nullable();
            $table->unsignedTinyInteger('money_management')->nullable();
            $table->unsignedTinyInteger('business_consulting')->nullable();
            $table->unsignedTinyInteger('team_work')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });

        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('url');
            $table->boolean('is_visible')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('navbar_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->string('section_one_title')->nullable();
            $table->text('section_one_content')->nullable();
            $table->string('section_two_title')->nullable();
            $table->text('section_two_content')->nullable();
            $table->string('how_it_works_title')->nullable();
            $table->text('how_it_works_content')->nullable();
            $table->string('section_one_service_1_title')->nullable();
            $table->text('section_one_service_1_content')->nullable();
            $table->string('section_one_service_2_title')->nullable();
            $table->text('section_one_service_2_content')->nullable();
            $table->string('section_one_service_3_title')->nullable();
            $table->text('section_one_service_3_content')->nullable();
            $table->timestamps();
        });

        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('type')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('static_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });

        Schema::create('editable_content', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('section_name');
            $table->string('type');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('editable_content');
        Schema::dropIfExists('static_pages');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('navbars');
        Schema::dropIfExists('team_members');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('news');
        Schema::dropIfExists('blog_category');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('categories');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            #banner section
            $table->string('banner_heading')->nullable();
            $table->string('banner_text')->nullable();
            $table->string('banner_image')->nullable();
            $table->integer('banner_package_price')->nullable();

            #package section
            $table->string('package_section_heading')->nullable();
            $table->string('package_section_text')->nullable();

            #video section
            $table->string('video_section_heading')->nullable();
            $table->string('video_section_text')->nullable();
            $table->string('video_section_image')->nullable();
            $table->string('video_section_video')->nullable();

            #counter
            $table->integer('counter_1');
            $table->string('counter_1_text');
            $table->integer('counter_2');
            $table->string('counter_2_text');
            $table->integer('counter_3');
            $table->string('counter_3_text');


            #service section
            $table->string('service_section_heading')->nullable();

            #cta section
            $table->string('cta_section_heading')->nullable();
            $table->string('cta_section_image')->nullable();

            #offer section
            $table->string('offer_section_heading')->nullable();
            $table->string('offer_section_text')->nullable();
            $table->string('offer_section_image')->nullable();

            #top package section
            $table->string('top_section_heading')->nullable();
            $table->string('top_section_text')->nullable();
            $table->string('top_section_subtext')->nullable();
            $table->string('top_section_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};

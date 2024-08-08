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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_text');
            $table->string('about_image_1');
            $table->string('about_image_2');
            
            #counter
            $table->integer('counter_1');
            $table->string('counter_1_text');
            $table->integer('counter_2');
            $table->string('counter_2_text');
            $table->integer('counter_3');
            $table->string('counter_3_text');
            $table->integer('counter_4');
            $table->string('counter_4_text');
            
            #skill section
            $table->string('skill_section_heading');
            $table->string('skill_section_text');
            $table->string('skill_section_image');
            $table->string('skill_section_video')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};

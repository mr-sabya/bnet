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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('bandwidth');
            $table->integer('price');
            $table->string('feature_1');
            $table->string('feature_2');
            $table->string('feature_3');
            $table->string('feature_4');
            $table->string('feature_5');
            $table->string('feature_6')->nullable();
            $table->string('feature_7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};

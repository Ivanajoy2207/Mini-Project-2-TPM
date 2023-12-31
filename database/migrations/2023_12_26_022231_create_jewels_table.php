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
        Schema::create('jewels', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Gram');
            $table->string('Color');
            $table->string('Image');
            $table->foreignId('CategoryId')->references('CategoryId')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewels');
    }
};

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            // $table->file('image');
            $table->string('image_src')->nullable();
            $table->boolean('searchable')->default(1)->nullable();
            $table->boolean('enabled')->default(1)->nullable();
            $table->integer('parent_id')->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

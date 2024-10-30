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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('status');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('caption');
            $table->string('description');
            $table->integer('views');
            $table->string('url_video');
            $table->string('url_audio');
            $table->string('image_thumbnail');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};

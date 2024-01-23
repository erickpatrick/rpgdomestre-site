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
        Schema::create('alteregos', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['aventuras', 'campanhas', 'tabelas']);
            $table->string('slug');
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->string('keywords');
            $table->longText('content');
            $table->enum('status', ['published', 'draft']);
            $table->timestamp('published_at')->default(time());
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alteregos');
    }
};

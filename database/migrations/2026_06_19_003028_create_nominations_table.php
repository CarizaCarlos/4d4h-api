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
        Schema::create('nominations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users');
            $table->foreignId('submission_id')->constrained('submissions');
            $table->foreignId('category_id')->constrained('categories');
            $table->decimal('final_score', 9, 8)->nullable();
            $table->unsignedInteger('final_rank')->nullable();
            $table->timestamps();

            $table->unique(['submission_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominations');
    }
};
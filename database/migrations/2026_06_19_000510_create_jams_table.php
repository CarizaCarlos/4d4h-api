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
        Schema::create('jams', function (Blueprint $table) {
            $table->id();
            $table->string('theme');
            $table->dateTime('registration_start');
            $table->dateTime('submission_start');
            $table->dateTime('nominations_start');
            $table->dateTime('voting_start');
            $table->dateTime('reviewing_start');
            $table->dateTime('results_start');
            $table->dateTime('jam_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jams');
    }
};

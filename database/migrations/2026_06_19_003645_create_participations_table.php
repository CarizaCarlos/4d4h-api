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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jam_id')->constrained('jams');
            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('participant_id')->constrained('users');
            $table->timestamps();

            $table->unique(['team_id', 'participant_id']);
            $table->unique(['jam_id', 'participant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};

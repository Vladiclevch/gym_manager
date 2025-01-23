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
        Schema::create('gym_members', function (Blueprint $table) {
            $table->id();
            $table->string('card_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('card_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_members');
    }
};

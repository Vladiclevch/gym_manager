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
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->foreignid('gym_members_id')->constrained('gym_members')->onDelete('cascade');
            $table->enum('membership_type', ['member', 'trainer']);
            $table->enum('status', ['active', 'inactive', 'expired']);
            $table->timestamps();

            $table->index('membership_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership');
    }
};

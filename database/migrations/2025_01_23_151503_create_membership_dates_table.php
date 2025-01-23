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
        Schema::create('membership_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignid('membership_id')->constrained('membership')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->index('start_date');
            $table->index('end_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_dates');
    }
};

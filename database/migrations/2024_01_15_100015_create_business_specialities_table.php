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
        Schema::create('business_specialities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('businesses_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('specialities_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_specialities');
    }
};

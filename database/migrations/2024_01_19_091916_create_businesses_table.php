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
        Schema::create('businesses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->bigInteger('siret');
            $table->string('website');
            $table->string('biography');
            $table->string('history');
            $table->timestamps();
            $table->foreignUuid('users_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('crafts_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('themes_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};

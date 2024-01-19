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
            $table->foreignUuid('users_id');
            $table->string('name');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->bigInteger('siret');
            $table->foreignUuid('crafts_id');
            $table->string('website');
            $table->string('biography');
            $table->string('history');
            $table->foreignUuid('themes_id');
            $table->timestamps();
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

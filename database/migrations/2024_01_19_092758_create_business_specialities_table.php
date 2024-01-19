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
            $table->foreign('businesses_id')
                ->references('id')
                ->on('businesses')
                ->onDelete('cascade');
            $table->foreign('specialities_id')
                ->references('id')
                ->on('specialities')
                ->onDelete('cascade');
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

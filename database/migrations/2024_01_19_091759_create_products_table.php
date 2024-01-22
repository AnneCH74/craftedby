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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('business_id');
            $table->string('name');
            $table->decimal('price');
            $table->integer('stock');
            $table->foreignUuid('material_id');
            $table->string('size');
            $table->integer('weight');
            $table->foreignUuid('color_id')->constrained()->cascadeOnDelete();
            $table->boolean('customisable');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

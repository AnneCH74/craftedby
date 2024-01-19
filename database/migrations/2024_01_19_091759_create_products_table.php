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
            $table->foreign('businesses_id')
                    ->references('id')
                    ->on('businesses')
                    ->onDelete('cascade');
            $table->string('name');
            $table->decimal('price');
            $table->integer('stock');
            $table->foreign('materials_id');
            $table->string('size');
            $table->integer('weight');
            $table->foreign('colors_id');
            $table->boolean('customisable');
            $table->string('image');
            $table->timestamps('created at');
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

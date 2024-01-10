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
        Schema::create('create_inventory_table', function (Blueprint $table) {
            $table->integer('book_id');
            $table->string('book_name');
            $table->string('author');
            $table->string('categories');
            $table->date('released_date');
            $table->integer('price');
            $table->integer('quantity');
            $table->text('review');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_inventory_table');
    }
};

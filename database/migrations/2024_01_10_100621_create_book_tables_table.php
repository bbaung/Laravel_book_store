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
        Schema::create('book_tables', function (Blueprint $table) {
            $table->uuid('book_id')->unique();
            $table->string('name');
            $table->string('author');
            $table->string('categories');
            $table->date('released_date');
            $table->integer('price');
            $table->integer('quantity');
            $table->text('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tables');
    }
};

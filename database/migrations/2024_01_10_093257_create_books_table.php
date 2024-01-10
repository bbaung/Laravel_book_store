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
        Schema::create('books', function (Blueprint $table) {
            //manual
            //$table->id();
            //$table->string('book_id')->primary;
            //$table->primary(array("id"));
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
        Schema::dropIfExists('books');
    }
};

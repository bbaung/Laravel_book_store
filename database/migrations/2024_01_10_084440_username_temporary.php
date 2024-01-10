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
        Schema::create('create_username_temporary_table', function (Blueprint $table) {
            $table->integer('userid');
            $table->string('username');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('password');
            $table->string('address');
            $table->integer('book_id');
            $table->string('book_name');
            $table->string('author');
            $table->string('categories');
            $table->integer('quantity');
            $table->integer('book_price');
            $table->integer('total_price');
            $table->date('released_date');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_username_temporary_table');
    }
};

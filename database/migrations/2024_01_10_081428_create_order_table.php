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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('username');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('book_id')->on('book_tables');
            $table->string('bookname');
            $table->integer('quantity');
            $table->integer('bookprice');
            $table->integer('totalprice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};

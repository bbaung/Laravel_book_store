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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('username',50);
            $table->string('email',100);
            $table->string('phone',20);
            $table->string('address');
            $table->string('book_id');
            $table->string('bookname',100);
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
        Schema::dropIfExists('orders');
    }
};

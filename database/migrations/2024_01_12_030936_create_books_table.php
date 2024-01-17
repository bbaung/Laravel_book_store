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

            $table->id();
            // $table->string('user_id');// Default auto-incrementing primary key
            $table->string('bk_id')->unique()->nullable();
            $table->string('bk_name');
            $table->string('bk_author');
            $table->string('bk_cati');
            $table->date('bk_rel_date');
            $table->integer('bk_price');
            $table->integer('bk_quantity');
            $table->text('bk_review')->default('1');
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

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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();;
            $table->string('category');
            $table->text('description');
            $table->double('price');
            $table->double('discount');
            $table->string('image')->default('https://dummyimage.com/450x300/dee2e6/6c757d.jpg');
            $table->unsignedBigInteger('developer');
            $table->foreign('developer')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

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
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->unsignedBigInteger('game_id');
            $table->string('image')->nullable();
            $table->integer('smashed')->default(0);
            $table->integer('passed')->default(0);
            $table->integer('total')->default(0);
            $table->foreign('game_id')->references('id')->on('game')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character');
    }
};

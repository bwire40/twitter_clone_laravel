<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * create the twits table
     * content varchar 255
     * likes unasigned integer
     * created_at timestamp
     * updated_attimestamp
     */
    public function up(): void
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id(); //table id
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('content'); //content column
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps(); //created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};

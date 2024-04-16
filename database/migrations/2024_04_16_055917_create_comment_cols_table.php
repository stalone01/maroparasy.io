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
        Schema::create('comment_cols', function (Blueprint $table) {
            $table->id();
            $table->mediumText('contenu');

            // $table->unsignedBigInteger('col_id');
            // $table->foreign('col_id')->references('id')->on('collines');

            $table->foreignId('colline_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_cols');
    }
};

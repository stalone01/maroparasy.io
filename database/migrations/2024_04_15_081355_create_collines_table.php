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
        Schema::create('collines', function (Blueprint $table) {
            $table->id();
            $table->string('path')->default('/images/collines/ambohimanga-rova.jpg');
            $table->mediumText('titre');
            $table->mediumText('contenu');
            $table->mediumText('petit_titre');
            $table->integer('prix')->default('10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collines');
    }
};

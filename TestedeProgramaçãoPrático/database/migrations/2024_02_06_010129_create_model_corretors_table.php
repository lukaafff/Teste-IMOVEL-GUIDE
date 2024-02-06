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
        Schema::create('corretor', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->string('nome', 20)->nullable(false);
            $table->string('cpf', 11)->unique()->nullable(false);
            $table->string('creci', 8)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corretor');
    }
};

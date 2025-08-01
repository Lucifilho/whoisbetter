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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); // ex: GK, CB, ST
            $table->string('nationality');
            $table->string('image')->nullable();
            $table->foreignId('club_id')->constrained()->onDelete('cascade');
            // ...campo poll_id removido, relação será feita por tabela pivot...
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};

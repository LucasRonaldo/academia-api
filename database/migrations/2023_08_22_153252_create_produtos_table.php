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
        Schema::create('Produtos', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 80)->nullable(false);
            $table->number('qtd', 80)->nullable(false);
            $table->number('valor', 11)->unique(false);
            $table->string('Produtos', 15)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Produtos');
    }
};

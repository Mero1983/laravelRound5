<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('client_id')->Constrained('clients'); 
            $table->foreignId('order_id')->Constrained('orders'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_order');
    }
};

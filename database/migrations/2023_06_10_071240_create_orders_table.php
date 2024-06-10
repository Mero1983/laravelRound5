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
        Schema::create('orders', function (Blueprint $table) {
                $table->id();
               $table->foreignId('client_id')->Constrained('clients'); 
                $table->string('order_number',10);
                $table->string('total_amount',10);
                $table->enum('status', ['pending', 'processing', 'shipped', 'completed', 'cancelled']);
                $table->timestamps();
            });
        }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
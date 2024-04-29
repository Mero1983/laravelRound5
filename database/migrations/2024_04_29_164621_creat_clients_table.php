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
      schema::create('clients',function (Blueprint$table){
        $table-> string('clientName', 100);
        $table->string('phone', 25);
        $table->string('email', 100);
        $table->string('website', 100);
        $table->timestamps();
      });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
schema::dropIfExists(('clients'));
    }
};

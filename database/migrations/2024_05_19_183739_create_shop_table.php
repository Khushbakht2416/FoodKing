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
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->string('imgurl', 500);
            $table->string('cart_url', 200)->default('cart');
            $table->integer('dper')->nullable(); 
            $table->decimal('orgprice', 8, 2); 
            $table->decimal('disprice', 8, 2)->nullable(); 
            $table->string('foodname', 100); 
            $table->string('ratings', 1000)->default(0); 
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop');
    }
};

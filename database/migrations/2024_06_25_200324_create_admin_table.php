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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('null');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('admin_id')->unique();
            $table->string('profile_image')->default('frontend/muqaddas.png');
            $table->string('about')->default('null');
            $table->string('company')->default('null');
            $table->string('job')->default('null');
            $table->string('country')->default('null');
            $table->string('address')->default('null');
            $table->string('phone')->default('null');
            $table->string('twitter')->default('null');
            $table->string('facebook')->default('null');
            $table->string('instagram')->default('null');
            $table->string('linkedin')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 100)->default('null');
            $table->string('username',100)->default('null');
            $table->string('email', 200)->default('null');
            $table->string('password', 200)->default('null');
            $table->string('securepassword', 200)->default('null');
            $table->string('tokenkey', 200)->default('null');
            $table->string('ipaddress', 200)->default('null');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }
};

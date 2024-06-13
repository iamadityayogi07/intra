<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default(null);
            $table->string('last_name')->default(null);
            $table->string('phone')->default(0);
            $table->string('email')->unique()->default(null);
            $table->string('profession')->default(null);
            $table->integer('age')->default(0);
            $table->integer('otp')->default(0);
            $table->string('city')->default(null);
            $table->string('password')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

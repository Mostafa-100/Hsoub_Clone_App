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
        Schema::create('users', function (Blueprint $table) {
//            $table->string('username')->primary();

            $table->id();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');

            $table->string('profile_image_path')->nullable();
            $table->string('description')->nullable();
            $table->string('website')->nullable();

            $table->string('mostaql_url')->nullable();
            $table->string('khamsat_url')->nullable();

            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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

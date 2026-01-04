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
            $table->id()->primary();
            // $table->string('student_id')->unique()->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname')->nullable();
            $table->string('sex');
            $table->string('extname')->nullable();
            $table->string('email')->unique();
            $table->enum('course', ['BSSEGE', 'BSEEM', 'BSC', 'BSCA', 'BSIT', 'BSHM', 'BSTM'])->nullable();
            $table->enum('role', ['college_admin', 'faculty', 'student', 'basicEd_admin','encoder', 'evaluator', 'user', 'super_admin'])->default('super_admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

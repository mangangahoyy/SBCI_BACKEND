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
            $table->id();
            $table->string('userId')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname')->nullable();
            $table->string('sex');
            $table->string('extname')->nullable();
            $table->string('email')->unique();
            // $table->enum('course', ['BSSEGE', 'BSEEM', 'BSC', 'BSCA', 'BSIT', 'BSHM', 'BSTM'])->nullable();
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('role', ['college_admin', 'faculty',  'basicEd_admin','encoder', 'evaluator', 'user', 'super_admin'])->default('super_admin');
            // $table->enum('department', ['admin', 'jhs', 'shs', 'college', 'guidance', 'library', 'faculty','clinic', 'registrar', 'inventory'])->default('admin');
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


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
          Schema::dropIfExists('password_reset_tokens');
    }
};

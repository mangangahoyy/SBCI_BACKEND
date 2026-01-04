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
        Schema::create('academic_profiling', function (Blueprint $table) {
            $table->string('academicId')->primary();
            $table->string('studentID')->unique();
            // this table is for application of student academic records


            // academic information
            // all educational institution attended by the student
            $table->json('educationalBackground')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_profiling');
    }
};

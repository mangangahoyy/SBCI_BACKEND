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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('lrn', 20)->unique()->nullable();
            $table->string('familyId')->unique();


            $table->string('fname', 20);
            $table->string('mname', 20)->nullable();
            $table->string('lname', 20);
            $table->string('extname', 5)->nullable();
            $table->date('dob');
            $table->string('placeOfBirth', 100);
            $table->enum('gender', ['Male', 'Female']);

            // Address
            // copilot help me answer this using intelisense
            // answer here:
            // copilot answer me now
            //  help me to merge houseNO. and street into address line
            $table->string('addressLine', 150);
            $table->string('barangay', 100);
            $table->string('cityMunicipality', 100);
            $table->string('province', 100);
            $table->string('postalCode', 10);

            // Contact Information
            $table->string('email')->unique();
            $table->string('phone', 15)->unique();


            // Additional Information
            $table->string('motherTongue', 50);
            $table->string('religion', 50);
            $table->string('citizenship', 50);


            // educational background
            $table->string('previousSchool', 100);
            $table->string('schoolAddress', 200);
            $table->date('yearAttended');
            $table->text('honorsReceived')->nullable();
            $table->timestamps();
        });

        Schema::create('student_profiles', function (Blueprint $table) {
            $table->string('profileId')->primary();
            $table->string('studentID')->unique();
            // this table is for additional information of student profile
            // applicatgion information
            $table->enum('courseGrade',[
                'nursery',
                'elementary',
                'jhs',
                'shs',
                'BSED-GE',
                'BEED-MATH',
                'BSCrim',
                'BSCA',
                'BSIT',
                'BSHM',
                'BSTM'
            ]);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('student_profiles');
    }
};

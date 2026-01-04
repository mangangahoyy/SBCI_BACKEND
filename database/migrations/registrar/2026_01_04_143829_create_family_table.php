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
        Schema::create('family', function (Blueprint $table) {
            $table->string('familyId')->primary();
              // guardian information
            $table->string('guardianName', 100);
            $table->string('guardianOfficeNo', 15)->nullable();
            $table->string('guardianHomeNo', 15)->nullable();
            $table->string('guardianMobileNo', 15);
            $table->string('guardianEmail', 100)->nullable();
            $table->string('guardianRelationship', 100)->nullable();
            $table->string('guardianOccupation', 100)->nullable();
            $table->string('guardianCompany', 100)->nullable();
            $table->string('guardianIncome', 50)->nullable();


            $table->string('fatherName', 100)->nullable();
            $table->string('fatherOccupation', 100)->nullable();
            $table->string('fatherEmail', 100)->nullable();
            $table->string('fatherMobileNo', 15)->nullable();
            $table->string('fatherOfficeNo', 15)->nullable();
            $table->string('fatherCompany', 100)->nullable();
            $table->string('fatherHomeNo', 15)->nullable();

            $table->string('motherName', 100)->nullable();
            $table->string('motherOccupation', 100)->nullable();
            $table->string('motherEmail', 100)->nullable();
            $table->string('motherMobileNo', 15)->nullable();
            $table->string('motherOfficeNo', 15)->nullable();
            $table->string('motherCompany', 100)->nullable();
            $table->string('motherHomeNo', 15)->nullable();

            // this is for emergency contact include fullname, office no, homeno, mobileno, email, relationship,thne it should had home address fields like, addressline, barangay, citymunicipality, province, postalcode
            $table->string('emergencyContactName', 100);
            $table->string('emergencyContactOfficeNo', 15)->nullable();
            $table->string('emergencyContactHomeNo', 15)->nullable();
            $table->string('emergencyContactMobileNo', 15);
            $table->string('emergencyContactEmail', 100)->nullable();
            $table->string('emergencyContactRelationship', 100);
            $table->string('emergencyContactAddressLine', 255)->nullable();
            $table->string('emergencyContactBarangay', 100)->nullable();
            $table->string('emergencyContactCityMunicipality', 100)->nullable();
            $table->string('emergencyContactProvince', 100)->nullable();
            $table->string('emergencyContactPostalCode', 10)->nullable();

            // siblings
            $table->string('numberOfSiblings', 2)->nullable();
            //for this next fiel i wnat  the siblings is store into json input so that when i pull it i just need to parse it
            $table->json('siblings')->nullable();

            // financial information
            $table->enum('financialType', [
                "self Sponsored",
                "Father",
                "Mother",
                "other"
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family');
    }
};

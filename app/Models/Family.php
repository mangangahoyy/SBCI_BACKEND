<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $fillable = [
        'familyId',
        'guardianName',
        'guardianOfficeNo',
        'guardianHomeNo',
        'guardianMobileNo',
        'guardianEmail',
        'guardianRelationship',
        'guardianOccupation',
        'guardianCompany',
        'guardianIncome',
        'fatherName',
        'fatherOccupation',
        'fatherEmail',
        'fatherMobileNo',
        'fatherOfficeNo',
        'fatherCompany',
        'fatherHomeNo',
        'motherName',
        'motherOccupation',
        'motherEmail',
        'motherMobileNo',
        'motherOfficeNo',
        'motherCompany',
        'motherHomeNo',
        'emergencyContactName',
        'emergencyContactOfficeNo',
        'emergencyContactHomeNo',
        'emergencyContactMobileNo',
        'emergencyContactEmail',
        'emergencyContactRelationship',
        'emergencyContactAddressLine',
        'emergencyContactBarangay',
        'emergencyContactCityMunicipality',
        'emergencyContactProvince',
        'emergencyContactPostalCode',
        'numberOfSiblings',
        'siblings',
     'financialType',
    ];
}

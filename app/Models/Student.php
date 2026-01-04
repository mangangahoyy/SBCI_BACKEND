<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'lrn',
        'familyId',
        'fname',
        'mname',
        'lname',
        'extname',
        'dob',
        'placeOfBirth',
        'gender',
        'addressLine',
        'barangay',
        'cityMunicipality',
        'province',
        'postalCode',
        'email',
        'phone',
        'motherTongue',
        'religion',
        'citizenship',
        'previousSchool',
        'schoolAddress',
        'yearAttended',
        'honorsReceived',
    ];
    
}

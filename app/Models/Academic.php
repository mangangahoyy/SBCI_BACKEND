<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $table = 'academic_profiling';
    protected $primaryKey = 'academicId';
    public $incrementing = false;

    protected $fillable = [
        'academicId',
        'studentID',
        'educationalBackground',
    ];

    protected $casts = [
        'educationalBackground' => 'array',
    ];
}

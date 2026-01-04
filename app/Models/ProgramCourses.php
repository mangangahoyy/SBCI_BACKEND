<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramCourses extends Model
{
    protected $table = 'program_courses';

    protected $fillable = [
        'courseCode',
        'courseTitle',
        'description',
        'credits',
        'units',
        'program_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'programName',
        'description',
    ];


    public function user()
    {
        return $this->hasMany(User::class);
    }


}

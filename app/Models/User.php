<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['fname', 'lname', 'mname', 'sex', 'role', 'program_name', 'email', 'password'];

    protected static function booted()
    {
        static::creating(function ($user) {
            if (!$user->userId) {
                // Choose prefix based on role (optional)
                $prefix = match($user->role) {
                    'encoder' => 'ENC',
                    'evaluator' => 'EVAL',
                    'college_admin' => 'CAD',
                    'basicEd_admin' => 'BED',
                    default => 'USR',
                };

                // Generate numeric part, padded to 4 digits
                $nextId = (User::max('id') ?? 0) + 1;
                $user->userId = $prefix . '-' . str_pad($nextId, 4, '0', STR_PAD_LEFT);
            }
        });
    }


    // public function program()
    // {
    //     return $this->belongsTo(Program::class);
    // }

}

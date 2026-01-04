<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
 use App\Models\Program;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */


public function run(): void
{
    // Create a default program
    $program = Program::create([
        'programName' => 'Default Program',
        'description' => 'This is the default program for super admin',
    ]);

    User::create([
        'userId' => 'SUPERADMIN001',
        'fname' => 'Super',
        'lname' => 'Admin',
        'sex' => 'M',
        'email' => 'superadmin@example.com',
        'program_id' => $program->id, // use the actual ID
        'role' => 'super_admin',
        'password' => Hash::make('password123'),
    ]);
}

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'davinreinaldogozali@gmail.com',
            'name' => 'Davin Reinaldo G',
            'password' => Hash::make('asdf123'),
            'status' => 'active',
        ]);
    }
}
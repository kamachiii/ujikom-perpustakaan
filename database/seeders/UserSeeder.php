<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'nama_lengkap' => 'admin',
                'email' => 'admin@app.com',
                'password' => Hash::make('admin123'),
                'alamat' => fake('id_ID')->address(),
                // 'email_verified_at' => now(),
                // 'remember_token' => Str::random(10),
                'role' => 'admin',

            ],
            [
                'username' => 'petugas',
                'nama_lengkap' => 'petugas',
                'email' => 'petugas@app.com',
                'password' => Hash::make('petugas123'),
                'alamat' => fake('id_ID')->address(),
                // 'email_verified_at' => now(),
                // 'remember_token' => Str::random(10),
                'role' => 'petugas',

            ],
            [
                'username' => 'user',
                'nama_lengkap' => 'user',
                'email' => 'user@app.com',
                'password' => Hash::make('user123'),
                'alamat' => fake('id_ID')->address(),
                // 'email_verified_at' => now(),
                // 'remember_token' => Str::random(10),
                'role' => 'peminjam',

            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
        User::factory(10)->create();
    }
}

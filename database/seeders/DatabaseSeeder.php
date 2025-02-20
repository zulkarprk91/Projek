<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus atau sesuaikan jika tidak ingin menggunakan factory
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('@admin123'), // Pastikan password di-hash
            'role' => 'admin',
            'email_verified_at' => now(), // Menandakan email sudah diverifikasi
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('@user123'), // Pastikan password di-hash
            'role' => 'user',
            'email_verified_at' => now(),
        ]);
    }
}

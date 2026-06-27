<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pengurus RW
        User::create([
            'name' => 'Pengurus RW',
            'email' => 'rw@siwarga.com',
            'password' => bcrypt('password'),
            'role' => 'rw',
            'phone_number' => '0811111111',
        ]);

        // Pengurus RT
        User::create([
            'name' => 'Pengurus RT 01',
            'email' => 'rt01@siwarga.com',
            'password' => bcrypt('password'),
            'role' => 'rt',
            'rt_number' => '01',
            'phone_number' => '0822222222',
        ]);

        // Warga
        User::create([
            'name' => 'Warga Satu',
            'email' => 'warga@siwarga.com',
            'password' => bcrypt('password'),
            'role' => 'warga',
            'rt_number' => '01',
            'phone_number' => '0833333333',
        ]);
    }
}

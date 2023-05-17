<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'username' => 'rendy',
            'name' => 'Rendy Dwi Pradana',
            'email' => 'rendy@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'admin'
        ]);

        DB::table('users')->insert([
            'username' => 'refki',
            'name' => 'Refki Khaira Habibi',
            'email' => 'refki@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'operator'
        ]);

        DB::table('users')->insert([
            'username' => 'kadir',
            'name' => 'Abdul Kadir',
            'email' => 'kadir@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'mahasiswa'
        ]);
    }
}

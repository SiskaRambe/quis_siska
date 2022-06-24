<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Siska Mayasari Rambe',
            'email' => 'siska@gmail.com',
            'alamat' => 'Aksara',
            'hp' => '087764387823',
            'pos' => '894281',
            'role' => 1,
            'aktif' => 1,
            'password' => Hash::make('password')
        ]);
    }
}

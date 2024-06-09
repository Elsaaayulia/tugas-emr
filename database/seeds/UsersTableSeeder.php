<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus data user yang sudah ada
        DB::table('users')->truncate();

        // Tambahkan user default
        DB::table('users')->insert([
            'name' => 'Elsa',
            'email' => 'elsa@admin.com',
            'phone' => '082116449847',
            'password' => Hash::make('password'),
        ]);

        // Tambahkan user lain jika diperlukan
        // DB::table('users')->insert([
        //     'name' => 'Nama Pengguna Lain',
        //     'email' => 'email_lain@contoh.com',
        //     'password' => Hash::make('password_lain'),
        // ]);

        // Tambahkan lebih banyak user jika diperlukan
    }
}

<?php

namespace Database\Seeders;

use App\Enums\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => "admin",
            'email' => "lamesacuadradavigo@gmail.com",
            'phone_number' => null,
            'rol' => Rol::Admin,
            'password' => Hash::make("2626tonan55")
        ]);

    }
}

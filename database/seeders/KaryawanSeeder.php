<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Karyawan::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminjbu'),
            'jabatan' => 'CEO',
            'instagram' => 'https://www.instagram.com/',
            'linkedin' => 'https://www.linkedin.com/',
        ]);
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            \App\Models\Karyawan::create([
                'nama' => $faker->name(),
                'email' => $faker->email(),
                'password' => bcrypt($faker->password()),
                'jabatan' => $faker->jobTitle(),
                'instagram' => $faker->url(),
                'linkedin' => $faker->url(),
            ]);
        }
    }
}

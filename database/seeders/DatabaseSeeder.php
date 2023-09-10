<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Calon;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;

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
            'nim' => '123123',
            'nama_pengguna' => 'Ryand Arifriantoni',
            'jenis_kelamin' => 'L',
            'jurusan' => 'TI',
            'prodi' => 'SAINTEK',
            'kelas' => 'A',
            'level' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'status' => 1
        ]);

        // User::factory(9)->create();

        // Calon::factory(3)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lutfi Dwi Prayoga',
            'username' => 'lutfidwiprayoga',
            'level' => 'admin',
            'email' => 'upikbanyuwangi123@gmail.com',
            'password' => bcrypt('12345upik')
        ]);
        User::create([
            'name' => 'raung',
            'username' => 'raung',
            'level' => 'admin',
            'email' => 'adminraung@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}

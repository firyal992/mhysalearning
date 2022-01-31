<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create([
            'id' => 1,
            'role_name' => 'Super Admin'
        ]);
        RoleUser::create([
            'id' => 2,
            'role_name' => 'Tutor'
        ]);
        RoleUser::create([
            'id' => 3,
            'role_name' => 'Siswa'
        ]);
    }
}

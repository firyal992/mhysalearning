<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'super@super.com',
            'username' => 'superadmin',
            'phonenumber' => '123456789',
            'password' => Hash::make('supersuper')
        ]);
        User::create([
            'id' => 2,
            'role_id' => 2,
            'name' => 'Tutor Mhysa',
            'email' => 'tutor@tutor.com',
            'username' => 'tutor',
            'phonenumber' => '123456789',
            'password' => Hash::make('tutortutor')
        ]);
        User::create([
            'id' => 3,
            'role_id' => 3,
            'name' => 'Siswa Mhysa',
            'email' => 'siswa@siswa.com',
            'username' => 'siswa',
            'phonenumber' => '123456789',
            'password' => Hash::make('siswasiswa')
        ]);

        User::create([
            'id' => 4,
            'role_id' => 2,
            'name' => 'Erica G Sanger',
            'email' => 'erica@tutor.com',
            'username' => 'erica',
            'phonenumber' => '123456789',
            'password' => Hash::make('erica')
        ]);

        User::create([
            'id' => 5,
            'role_id' => 2,
            'name' => 'Intan Salamina',
            'email' => 'intan@tutor.com',
            'username' => 'intan',
            'phonenumber' => '123456789',
            'password' => Hash::make('intan')
        ]);

        User::create([
            'id' => 6,
            'role_id' => 2,
            'name' => 'Felix Malvian',
            'email' => 'felix@tutor.com',
            'username' => 'felix',
            'phonenumber' => '123456789',
            'password' => Hash::make('felix')
        ]);

        User::create([
            'id' => 7,
            'role_id' => 2,
            'name' => 'Demiro Ragil Syahbana',
            'email' => 'demi@tutor.com',
            'username' => 'demi',
            'phonenumber' => '123456789',
            'password' => Hash::make('demi')
        ]);

        User::create([
            'id' => 8,
            'role_id' => 2,
            'name' => 'Mila Puspita',
            'email' => 'mila@tutor.com',
            'username' => 'mila',
            'phonenumber' => '123456789',
            'password' => Hash::make('mila')
        ]);

        User::create([
            'id' => 9,
            'role_id' => 2,
            'name' => 'Hagie Deju Pangersa',
            'email' => 'hagie@tutor.com',
            'username' => 'hagie',
            'phonenumber' => '123456789',
            'password' => Hash::make('hagie')
        ]);

        User::create([
            'id' => 10,
            'role_id' => 2,
            'name' => 'Gerald Giovanni R Gita',
            'email' => 'gege@tutor.com',
            'username' => 'gege',
            'phonenumber' => '123456789',
            'password' => Hash::make('gege')
        ]);
    }
}

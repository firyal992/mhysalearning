<?php

namespace Database\Seeders;

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
        $this->call(RoleUserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(TutorDetailSeeder::class);
    }
}

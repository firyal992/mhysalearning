<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'MS. Office',
            'slug' => 'ms-office'
        ]);

        

        
    }
}

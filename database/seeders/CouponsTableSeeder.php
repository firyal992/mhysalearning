<?php

namespace Database\Seeders;
use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'=>'ABCD123',
            'type'=>'fixed',
            'value'=>10,

        ]);

        Coupon::create([
            'code'=>'CIPTA5',
            'type'=>'percent',
            'percent_of'=>10,

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('favorites')->insert(
            [
                'user_id' => 2,
                'product_id' => 1,
            ]
        );
        DB::table('favorites')->insert(
            [
                'user_id' => 2,
                'product_id' => 2,
            ]
        );
        DB::table('favorites')->insert(
            [
                'user_id' => 3,
                'product_id' => 3,
            ]
        );
        DB::table('favorites')->insert(
            [
                'user_id' => 2,
                'product_id' => 4,
            ]
        );
    }
}

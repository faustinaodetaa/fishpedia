<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->insert(
            [
                'user_id' => '1',
                'profession' => 'Admin',
                'address' => 'Jl. Admin No. 1'
            ]
        );
        DB::table('profiles')->insert(
            [
                'user_id' => '2',
                'profession' => 'Breeder',
                'address' => 'Jl. Bree No. 2'
            ]
        );
        DB::table('profiles')->insert(
            [
                'user_id' => '3',
                'profession' => 'Distributor',
                'address' => 'Jl. Dizzy No. 3'
            ]
        );
        DB::table('profiles')->insert(
            [
                'user_id' => '4',
                'profession' => 'Collector',
                'address' => 'Jl. Torry No. 4'
            ]
        );
    }
}

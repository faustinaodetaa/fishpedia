<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Faustin',
                'email' => 'faustin@mail.com',
                'password' => bcrypt('fos22'),
                'role' => 'user'
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Odeta',
                'email' => 'odeta@mail.com',
                'password' => bcrypt('odet4'),
                'role' => 'user'
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Giggle',
                'email' => 'giggle@mail.com',
                'password' => bcrypt('gigs'),
                'role' => 'user'
            ]
        );
    }
}

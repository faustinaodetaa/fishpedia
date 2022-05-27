<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                'name' => 'Red Arowana',
                'price' => 3500000,
                'description' => 'A Red Arowana scales have bright red rims, sometimes around a gold base color.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Guppy',
                'price' => 30000,
                'description' => 'A colourful, live-bearing freshwater fish of the family Poeciliidae, popular as a pet in home aquariums.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Albino',
                'price' => 27000,
                'description' => 'An albino fish with a white body and pink or red eyes.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Goldfish',
                'price' => 50000,
                'description' => 'A goldfish with two sets of paired fins - the pectoral fins and pelvic fins, and three single fins- the dorsal, caudal, and anal fin.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Red Arowana Jumbo',
                'price' => 13500000,
                'description' => 'A Jumbo Red Arowana scales have bright red rims, sometimes around a gold base color.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Guppy Jumbo',
                'price' => 130000,
                'description' => 'A Jumbo colourful, live-bearing freshwater fish of the family Poeciliidae, popular as a pet in home aquariums.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Albino Jumbo',
                'price' => 127000,
                'description' => 'A jumbo albino fish with a white body and pink or red eyes.',
                'image' => ''
            ]
        );
        DB::table('products')->insert(
            [
                'name' => 'Goldfish Jumbo',
                'price' => 150000,
                'description' => 'A jumbo goldfish with two sets of paired fins - the pectoral fins and pelvic fins, and three single fins- the dorsal, caudal, and anal fin.',
                'image' => ''
            ]
        );
    }
}

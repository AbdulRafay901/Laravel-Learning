<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Str;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('demoSeeder')->insert([
            "Name" => Str::random(10),
            "Email" => Str::random(10).'@gmail.com',
        ]);

        // php artisan db:seed --class=DemoSeeder YE commd demo data insert krne liye use hoti he
        
    }
}

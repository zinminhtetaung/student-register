<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => Str::random(10),
            'dob' => date('Y-m-d H:i:s'),
            'nrc' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'course' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctor')->insert([
            'name'=>'Dr. Amzad Hossain',
            'designation'=>'Professor',
            'email'=>'amzad@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01723835125',
            'img'=>'dist/img/user8-128x128.jpg',
            'status'=>1,
            'd_id'=>1,
        ]);
        DB::table('doctor')->insert([
            'name'=>'Dr. Nazul Islam',
            'designation'=>'Assistant Professor',
            'email'=>'nazrul@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01743897639',
            'img'=>'dist/img/doctor_2.jpg',
            'status'=>1,
            'd_id'=>4,
        ]);
        DB::table('doctor')->insert([
            'name'=>'Dr. Nasrin Jaman',
            'designation'=>'Professor',
            'email'=>'nasrin@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01911364781',
            'img'=>'dist/img/user7-128x128.jpg',
            'status'=>1,
            'd_id'=>6,
        ]);
        DB::table('doctor')->insert([
            'name'=>'Dr. Humayra',
            'designation'=>'Professor',
            'email'=>'humayra@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01674839022',
            'img'=>'dist/img/doctor_3.jpg',
            'status'=>1,
            'd_id'=>1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([

            //for admin login
         [
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
         ] ,
         //for agent login 
         [
            'name' =>'agent',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('111'),
         ] ,
         //for user login
         [
            'name' =>'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
         ]  
        
        ]);
        }
}

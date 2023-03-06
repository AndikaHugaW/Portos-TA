<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    
        @return void

    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Huga',
            'email'=>'andikahuga34@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }    
}
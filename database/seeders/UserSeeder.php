<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '名前',
            'email' => 'メール',
            'password' => 'パスワード',
            'goal' => 2000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
    ]);        
    }
}

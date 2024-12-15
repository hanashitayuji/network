<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class test_users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'test@test.com',
            'password' => 'test1111',
            'name' => 'テスト',
            'tel' => '09011117777',
            'tel2' => '09022223333',
            'created_at' => '2024-02-26 12:47:39',
            'updated_at' => '2024-02-26 12:47:39',
            'del_flg' => '0',
        ]);
    }
}

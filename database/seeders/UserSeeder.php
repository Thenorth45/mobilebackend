<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
        [
            'name' => 'Jak',
            'email' => 'jak@tsu.com',
            'password' => md5('123456'),
            'address' => 'tsu',
            'telephone' => '0864082512',
        ],
        [
            'name' => 'Sorn',
            'email' => 'sorn@tsu.com',
            'password' => md5('123456'),
            'address' => 'tsu',
            'telephone' => '0946658772',
        ],
        [
            'name' => 'Not',
            'email' => 'Not@tsu.com',
            'password' => md5('123456'),
            'address' => 'tsu',
            'telephone' => '0883788655',
        ],
        [
            'name' => 'Pond',
            'email' => 'Pond@tsu.com',
            'password' => md5('123456'),
            'address' => 'tsu',
            'telephone' => '0999030891',
        ]
        ]
    );
    }
}

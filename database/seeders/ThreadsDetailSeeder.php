<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'thread_id' => '1',
                'message' => 'テストメッセージ1です',
                'role' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thread_id' => '1',
                'message' => 'テストメッセージ2です',
                'role' => 'ChatGPT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'thread_id' => '1',
                'message' => 'テストメッセージ3です',
                'role' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

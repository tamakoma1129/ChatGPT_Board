<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            [
                'title' => 'サンプルスレッド1',
                'overview' => 'これはサンプルのスレッド1です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'サンプルスレッド2',
                'overview' => 'これはサンプルのスレッド2です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'サンプルスレッド3',
                'overview' => 'これはサンプルのスレッド3です。',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

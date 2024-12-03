<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'новое', 'created_at' => now()],
            ['name' => 'подтверждено', 'created_at' => now()],
            ['name' => 'отказано', 'created_at' => now()],
        ]);
    }
}

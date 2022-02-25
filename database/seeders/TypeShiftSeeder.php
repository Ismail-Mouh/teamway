<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_shifts')->insert([
            ['start' => 0, 'end' => 8],
            ['start' => 8, 'end' => 16],
            ['start' => 16, 'end' => 24]
        ]);
    }
}

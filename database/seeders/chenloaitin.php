<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chenloaitin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaitin')->insert([
            ['tenloai' => 'Bóng đá'],
            ['tenloai' => 'Chính trị'],
            ['tenloai' => 'Văn hoá & Giải trí'],
        ]);
    }
}

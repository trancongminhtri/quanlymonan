<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LoaispSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaisps')->insert([
            ['tenlsp'=>'Bò', 'trangthai'=>1],
            ['tenlsp'=>'Cua', 'trangthai'=>1],
            ['tenlsp'=>'Cá', 'trangthai'=>1],
            ['tenlsp'=>'Đậu hủ', 'trangthai'=>1],
            ['tenlsp'=>'Súp', 'trangthai'=>1],
            ['tenlsp'=>'Heo', 'trangthai'=>1],
            ['tenlsp'=>'Gà', 'trangthai'=>1],
            ['tenlsp'=>'Lẩu', 'trangthai'=>1],
            ['tenlsp'=>'Vịt', 'trangthai'=>1],
            ['tenlsp'=>'Tôm', 'trangthai'=>1]
        ]);
    }
}

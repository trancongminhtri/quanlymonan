<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LoainvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loainvs')->insert([
            ['tenloainv'=>'Quản lý', 'trangthai'=>1],
            ['tenloainv'=>'Phục vụ', 'trangthai'=>1],
            ['tenloainv'=>'Thu ngân', 'trangthai'=>1]
        ]);
    }
}

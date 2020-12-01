<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HinhanhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinhanhs')->insert([
            ['tenha'=>'Không Hình Ảnh','duongdan'=>'abc', 'trangthai'=>1]
        ]);
    }
}

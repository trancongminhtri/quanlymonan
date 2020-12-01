<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HoadonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoadons')->insert([
            ['idnv'=>'1', 'ngaylap'=>'2020-11-08', 'giolap'=>'13:55:29', 'thanhtien'=>'120', 'khachtra'=>'150', 'tienthua'=>'30', 'tang'=>1, 'ban'=>5],
            
        ]);
    }
}

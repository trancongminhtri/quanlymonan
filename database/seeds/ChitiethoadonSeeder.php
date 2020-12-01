<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChitiethoadonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chitiethoadons')->insert([
            ['idhd'=>1, 'idsp'=>1, 'tensp'=>'Bún Bò', 'soluong'=>2, 'tongtien'=>120]
        ]);
    }
}

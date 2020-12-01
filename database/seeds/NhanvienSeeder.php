<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NhanvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanviens')->insert([
            ['idlnv' => 1, 'hoten' => 'Nguyễn Văn Trọng', 'gioitinh' => 'Nam', 
            'cmnd' => '072200004866', 'ngaysinh' => '2000-10-23', 'dienthoai' => '0326440254', 
            'diachi' => 'Tây Ninh', 'taikhoan'=>'beshan01', 'matkhau'=>"123", 'trangthai' => 1],
        ]);
    }
}

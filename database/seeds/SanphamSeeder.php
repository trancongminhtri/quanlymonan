<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{     
        DB::table('sanphams')->insert([
            ['idlsp'=>1, 'idha'=>1, 'tensp'=>'Bún Bò', 'dongia'=>'60', 'MoTa'=>'Thịt bò và bún to', 'trangthai'=>1],
            ['idlsp'=>1, 'idha'=>1, 'tensp'=>'Bún Bò Chả Cá', 'dongia'=>'65', 'MoTa'=>'Thịt bò, bún to và chả cá', 'trangthai'=>1],
            ['idlsp'=>2, 'idha'=>1, 'tensp'=>'Bún Cua Viên', 'dongia'=>'60', 'MoTa'=>'Cua viên và bún to', 'trangthai'=>1],
            ['idlsp'=>2, 'idha'=>1, 'tensp'=>'Bánh Canh Cua', 'dongia'=>'60', 'MoTa'=>'Cua và bánh', 'trangthai'=>1],
            ['idlsp'=>3, 'idha'=>1, 'tensp'=>'Bún Chả Cá', 'dongia'=>'60', 'MoTa'=>'Chả cá và bún to', 'trangthai'=>1],
            ['idlsp'=>3, 'idha'=>1, 'tensp'=>'Cá Viên Chiên', 'dongia'=>'30', 'MoTa'=>'Cá viên chiên', 'trangthai'=>1],
            ['idlsp'=>4, 'idha'=>1, 'tensp'=>'Đậu Hủ Thúi ', 'dongia'=>'30', 'MoTa'=>'Đậu hủ lên men', 'trangthai'=>1],
            ['idlsp'=>4, 'idha'=>1, 'tensp'=>'Đậu Hủ Chiên', 'dongia'=>'25', 'MoTa'=>'Đậu hủ áp dầu', 'trangthai'=>1],
            ['idlsp'=>5, 'idha'=>1, 'tensp'=>'Súp Cua', 'dongia'=>'60', 'MoTa'=>'Cua và súp', 'trangthai'=>1],
            ['idlsp'=>5, 'idha'=>1, 'tensp'=>'Súp Hạt Sen', 'dongia'=>'40', 'MoTa'=>'Hạt sen và súp', 'trangthai'=>1]

        ]);
     
    }
}

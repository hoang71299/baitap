<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'email'             =>  '1234@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  '1234',
                'so_dien_thoai'     =>  '0905.523.543',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
            ],
            [
                'email'             =>  'fullstack@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  '1234456',
                'so_dien_thoai'     =>  '03.888.24.999',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
            ],
        ]);
    }
}

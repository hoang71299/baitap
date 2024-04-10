<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucNangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chuc_nangs')->delete();
        DB::table('chuc_nangs')->insert([
            ['id' => '1' , 'chuc_nang' => 'Lấy danh sách các Danh Mục'],
            ['id' => '99' , 'chuc_nang' => 'Tạo mới Danh Mục'],
            ['id' => '88' , 'chuc_nang' => 'Kiểm tra slug Danh Mục lúc Tạo Mới'],
            ['id' => '94' , 'chuc_nang' => 'Kiểm tra slug Danh Mục lúc Cập Nhật'],
            ['id' => '77' , 'chuc_nang' => 'Xoá Danh Mục Sản Phẩm'],
            ['id' => '45' , 'chuc_nang' => 'Cập nhật Danh mục Sản Phẩm'],
            ['id' => '11' , 'chuc_nang' => 'Đổi trạng thái Danh Mục Sản Phẩm'],
        ]);
    }
}

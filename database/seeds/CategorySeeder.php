<?php

use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    public function run()
    {
    	DB::table('categories')->delete();
    	$dataCategoryDefault = [
            ['id' => 1, 'name' => 'Root', 'parent' => 0, 'left' => 0, 'right' => 33, 'level' => 0, 'status' => 0],
            ['id' => 4, 'name' => 'Thang máy tải khách', 'parent' => 1, 'left' => 3, 'right' => 6, 'level' => 1, 'status' => 1],
            ['id' => 5, 'name' => 'Sản phẩm thanh tải khách', 'parent' => 4, 'left' => 4, 'right' => 5, 'level' => 2, 'status' => 1],
            ['id' => 6, 'name' => 'Thang máy gia đình', 'parent' => 1, 'left' => 7, 'right' => 10, 'level' => 1, 'status' => 1],
            ['id' => 7, 'name' => 'Sản phẩm thang máy gia đình', 'parent' => 6, 'left' => 8, 'right' => 9, 'level' => 2, 'status' => 1],
            ['id' => 10, 'name' => 'Thang máy bệnh viện', 'parent' => 1, 'left' => 11, 'right' => 14, 'level' => 1, 'status' => 1],
            ['id' => 11, 'name' => 'Sản phẩm thang máy bệnh viện', 'parent' => 10, 'left' => 12, 'right' => 13, 'level' => 2, 'status' => 1],
            ['id' => 12, 'name' => 'Thang máy tải hàng', 'parent' => 1, 'left' => 15, 'right' => 18, 'level' => 1, 'status' => 1],
            ['id' => 13, 'name' => 'Sản phẩm thang máy tải hàng', 'parent' => 12, 'left' => 16, 'right' => 17, 'level' => 2, 'status' => 1],
            ['id' => 14, 'name' => 'Thang thủy lực', 'parent' => 1, 'left' => 19, 'right' => 22, 'level' => 1, 'status' => 1],
            ['id' => 15, 'name' => 'Sản phẩm thang thủy lực', 'parent' => 14, 'left' => 20, 'right' => 21, 'level' => 2, 'status' => 1],
            ['id' => 16, 'name' => 'Tháng máy thực phẩm', 'parent' => 1, 'left' => 23, 'right' => 26, 'level' => 1, 'status' => 1],
            ['id' => 17, 'name' => 'Sản phẩm thang máy thực phẩm', 'parent' => 16, 'left' => 24, 'right' => 25, 'level' => 2, 'status' => 1],
            ['id' => 18, 'name' => 'Thang cuốn', 'parent' => 1, 'left' => 27, 'right' => 30, 'level' => 1, 'status' => 1],
            ['id' => 19, 'name' => 'Sản phẩm thang cuốn', 'parent' => 18, 'left' => 28, 'right' => 29, 'level' => 2, 'status' => 1],
            ['id' => 20, 'name' => 'Phụ kiện', 'parent' => 1, 'left' => 31, 'right' => 32, 'level' => 1, 'status' => 1]
        ];
    	foreach ($dataCategoryDefault as $rows){
            DB::table('categories')->insert($rows);
        }
        /*DB::table('categories')->insert([
            'id'=> 1,
            'name' => 'Root',
            'parent' => 0,
            'left' => 0,
            'right' => 1,
            'level' => 0
        ]);*/
    }
}

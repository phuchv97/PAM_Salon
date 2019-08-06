<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'name' => 'Trang Chủ',
                'slug' => 'home'
            ],
            [
                'name' => 'Dịch Vụ',
                'slug' => 'service'
            ],
            [
                'name' => 'Bài Viết',
                'slug' => 'blog'
            ],
            [
                'name' => 'Album Ảnh',
                'slug' => 'album'
            ],
            [
                'name' => 'Sản Phẩm',
                'slug' => 'produce'
            ],
            [
                'name' => 'Liên Hệ',
                'slug' => 'contact'
            ],
            [
                'name' => 'Đăng Nhập',
                'slug' => 'login'
            ],
        ];
        DB::table('menu')->insert($menu);
    }
}

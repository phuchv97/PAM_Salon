<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $product = [
            [
                'name'=>'Sữa Rửa Mặt Trà Xanh Innisfree Green Tea Cleansing Foam',
                'description'=>'Sữa rửa mặt Innisfree Green Tea là sữa rửa mặt thuộc hãng Innisfree Hàn Quốc.',
                'image'=>'uploaded/product_1.jpg',
                'price'=>'200000',
                'detail'=>$faker->text(255),
            ],
            [
                'name'=>'Sữa rửa mặt than hoạt tính Garnier men 100ml - LG213',
                'description'=>'Không chỉ phụ nữ, để có 1 làn da sạch khỏe, nam giới cũng cần phải chăm sóc da theo quy trình riêng. Trong đó làm sạch da bằng sữa rửa mặt là bước cơ bản và quan trọng mỗi ngày.',
                'image'=>'uploaded/product_2.jpg',
                'price'=>'75000',
                'detail'=>$faker->text(255),
            ],
            [
                'name'=>'Sữa Rửa Mặt CeraVe Foaming Facial Cleanser 355ml',
                'description'=>'Sữa rửa mặt CeraVe Foaming Facial Cleanser là sản phẩm sữa rửa mặt của thương hiệu CeraVe (Mỹ), với độ pH tiêu chuẩn 5,5, thành phần Ceramides, Hyaluronic acid, giúp loại bỏ bụi bẩn, dầu thừa, nhẹ dịu với da.',
                'image'=>'uploaded/product_3.png',
                'price'=>'350000',
                'detail'=>$faker->text(255),
            ],
        ];
        DB::table('product')->insert($product);
    }
}

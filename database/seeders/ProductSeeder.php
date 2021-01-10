<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'13000 BDT',
                'category'=>'Mobile',
                'description'=>'Much features added to oppo mobile',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a93/middlebanner/A93-middlebanner-white2-1340x1786-v2-pc.jpg'
            ],
            [
                'name'=>'Realme Mobile',
                'price'=>'20000 BDT',
                'category'=>'Mobile',
                'description'=>'Much features added to oppo mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71YC1181G3L._SL1200_.jpg'
            ],
            [
                'name'=>'Walton Tv',
                'price'=>'30000 BDT',
                'category'=>'Tv',
                'description'=>'Much features added to oppo mobile',
                'gallery'=>'https://5.imimg.com/data5/PE/MH/EZ/SELLER-47616313/32-inch-android-smart-led-tv-500x500.jpeg'
            ],
            [
                'name'=>'Fridge',
                'price'=>'43000 BDT',
                'category'=>'Fridge',
                'description'=>'Much features added to oppo mobile',
                'gallery'=>'https://cdn4.vectorstock.com/i/1000x1000/75/43/modern-fridge-freezer-refrigerator-vector-23027543.jpg'
            ],
        ]);
    }
}

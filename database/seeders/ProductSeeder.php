<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Haldirams Punjabi Tadka',
                "price"=>'54',
                "description"=>"A smartphone with 5gb ram and 256gb storage and many more features",
                "category"=>"snacks",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=270/app/images/products/sliding_image/608a.jpg?ts=1689327547",
            ],
            [
                'name'=>'Aashirvaad Atta',
                "price"=>'285',
                "description"=>"Aashirvaad Select Whole Wheat Sharbati Atta",
                "category"=>"aata",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=270/app/images/products/sliding_image/7a.jpg?ts=1698594693",
            ],
            [
                'name'=>'Patanjali aata',
                "price"=>'214',
                "description"=>"Patanjali Whole Wheat Chakki Atta (with Bran) 5 kg",
                "category"=>"aata",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=900/app/images/products/sliding_image/55389a.jpg?ts=1686225012",
            ],
            [
                'name'=>' Fortune Premium mustard oil ',
                "price"=>'134',
                "description"=>"Fortune Premium Kachi Ghani Pure Mustard Oil",
                "category"=>"oil",
                "gallery"=>"https://www.bigbasket.com/media/uploads/p/xxl/276756_8-fortune-fortune-premium-kachi-ghani-pure-mustard-oil.jpg",
            ],
            [
                'name'=>'Tata Salt',
                "price"=>'30',
                "description"=>"Tata Salt (Vacuum Evaporated Iodised Salt)",
                "category"=>"salt",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=900/app/images/products/sliding_image/105a.jpg?ts=1676867721",
            ],
        ]);
    }
}

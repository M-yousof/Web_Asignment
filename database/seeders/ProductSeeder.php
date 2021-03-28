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
         DB::table('_products')->insert([
             [
                
                    'name'=>'IVA Mobile',
                    'price'=>'$300',
                    'description'=>'IVA 3gb ram 128gb Storage',
                    'category'=>'Smart Phone',
                    'gallery'=>'https://www.mytrendyphone.eu/shop/samsung-galaxy-s10-duos-238694p.html',
                     
                    
             ],
             [
                'name'=>'Huwie Mobile',
                'price'=>'$300',
                'description'=>'3gb ram 156Storage',
                'category'=>'Smart Phone',
                'gallery'=>'https://www.mytrendyphone.eu/shop/samsung-galaxy-s10-duos-238694p.html',
                 ]
                
            
            
        ]);
    }
}

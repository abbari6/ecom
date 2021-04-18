<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('mobiles')->insert([
        [
        	'name'=>'Samsung Mobile',
        	'price'=>'12000',
        	'description'=>"Samsung Galaxy Note 20 to Come With 60Hz Full-HD Flat",
        	'category'=>'mobile',
        	'gallery'=>"https://i.gadgets360cdn.com/large/galaxynote20_onleaks_1590384704316.jpg?downsize=950:*&output-quality=80"
       ],
         [
        	'name'=>'Samsung Galaxy S9',
        	'price'=>'5000',
        	'description'=>"Band new samsung mobile with lot of more featues",
        	'category'=>'Mobile',
        	'gallery'=>"https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s9-ice-blue.jpg"
       ]
         
        ]);
    }
}

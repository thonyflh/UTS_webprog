<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Publisher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publisher')->insert([
            [
                'publisher_name'=>'Kompas Gramedia',
                'address'=>'Kompas Gramedia, Jl. Palmerah Sel. No.22-26, RT.4/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat',
                'phone'=>'0215483008',
                'email'=>'kompasgramedia@gmail.com',
                'image_publisher'=>'https://asset.kompas.com/crops/lvYGKhhQMo7WbK81H1p_cFQsOlw=/0x0:1000x667/750x500/data/photo/2018/08/15/19860368112.jpg'
            ],
            [
                'publisher_name'=>'erlangga',
                'address'=>'Alamanda Tower, Jl. TB Simatupang No.23 - 24, RT.1/RW.1, Cilandak Bar',
                'phone'=>'0215578921',
                'email'=>'erlanggaa@gmail.com',
                'image_publisher'=>'https://upload.wikimedia.org/wikipedia/id/5/5b/Esis.jpg'
            ]

        ]);
    }
}

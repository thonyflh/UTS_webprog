<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book_categoryr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categoryr')->insert([
            [
                'book_id'=>1,
                'category_id'=>1
            ],
            [
                'book_id'=>2,
                'category_id'=>1
            ],
            [
                'book_id'=>3,
                'category_id'=>2
            ],
            [
                'book_id'=>4,
                'category_id'=>2
            ]
        ]);
    }
}

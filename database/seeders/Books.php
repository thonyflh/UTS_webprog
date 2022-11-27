<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id'=>1,
                'title'=>'Blue Lock',
                'author'=>'Yusuke Nomura',
                'year'=>2018,
                'synopsis'=>'The story begins with Japans elimination from the 2018 FIFA World Cup, which prompts the Japanese Football Union to start a programme',
                'image_books'=>'https://m.media-amazon.com/images/I/51+3Z+insOL._AC_SY780_.jpg'
            ],
            [
                'publisher_id'=>1,
                'title'=>'Haikyuu',
                'author'=>'Furudate Haruichi',
                'year'=>2020,
                'sysnopsis'=>'Junior high school pupil Shoyo After viewing a nationwide tournament match on Television, Hinata develops a surprising love of volleyball.',
                'image_books'=>'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974707430/haikyu-vol-33-9781974707430_hr.jpg'
            ],
            [
                'publisher_id'=>2,
                'title'=>'Vagabond',
                'author'=>'Yoshikawa Eijii',
                'year'=>2016,
                'synopsis'=>'Growing up in the late 16th century Shinmen Takez, Sengoku era Japan? Is shunned by the neighborhood villagers as a devil kid because of his violent and wild',
                'image_books'=>'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781421577449/vagabond-vol-37-9781421577449_hr.jpg'
            ],
            [
                'publisher_id'=>2,
                'title'=>'Berserk',
                'author'=>'Miura Kentaro',
                'year'=>1989,
                'synopsis'=>'The Hawks play a critical role in stopping the 100-year war which has ravaged the state of Midland and are initially welcomed as heroes',
                'image_books'=>'https://i.pinimg.com/736x/16/25/c4/1625c43e6ce7ef316bc0ce72b8e7824f.jpg'
            ]
        ]);
    }
}

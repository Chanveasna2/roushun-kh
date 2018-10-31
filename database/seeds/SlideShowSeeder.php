<?php

use App\SlideShow;
use App\Photo;
use Illuminate\Database\Seeder;

class SlideShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $photo= Photo::create([
            'file'=>'slide1.png'
        ]);
        $slide = SlideShow::create([
            'slide_name'=>'slide1',
            'order'=>'1',
            'photo_id'=>'12',
        ]);
    }
}

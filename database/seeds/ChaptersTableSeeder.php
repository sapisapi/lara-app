<?php

use Illuminate\Database\Seeder;
use App\Chapter;


class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters=[
            [
                'chapter_id' => 'Chapter1',
                'chapter_sub' => '問合せ・質問',
                'description' => 'ビジネスでも日常生活でも、問い合わせや質問をするという状況は、頻繁に起こりますね。この言語行為の目的は、あなたが必要としている情報を相手から引き出すことです。そのためには、丁寧で分かりやすい尋ね方をすること、また、その情報が必要な理由をうまく伝えることが重要です。',
                'check' => '①質問に先立って前置きをし、唐突な印象を与えないようにする。
                ②状況に合った丁寧さの尋ね方をする。
                ③「この質問をしている理由」を、分かりやすく伝える。
                ④質問に答えてくれたことに、お礼を言う。',
            ],

        ];
        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
          }
    }
}

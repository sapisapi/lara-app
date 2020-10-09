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
            [
                'chapter_id' => 'Chapter2',
                'chapter_sub' => '依頼・指示',
                'description' => '自分の望む結果につながる依頼や指示をするには、依頼・指示の内容を誠実かつ明確に伝えることが重要です。また、相手に負担を掛けがちな言語行為であることを意識し、相手が十分に納得・共感するような理由を添えるようにしましょう。',
                'check' => '①不躾にならないように配慮し、状況にあった丁寧さで要望を伝えた。
                ②「この依頼をしている理由」を、相手が納得できるように伝えた。
                ③受け入れてもらう条件を提示する、無理強いはしない意向を伝えるなど、相手の負担を軽減する提案を添えた。
                ④対応してくれたことに、お礼を言った。',
            ],
            [
                'chapter_id' => 'Chapter3',
                'chapter_sub' => '提案・助言',
                'description' => '提案や助言は基本的に「相手にとって有益だと思われることを伝える」という、善意からの行動です。しかし、表現次第では、相手の現状や考えを否定しているかのような印象を与える可能性もあります。自分の善意がうまく伝わるように気を配りましょう。',
                'check' => '①いきなり提案するのではなく、相手に配慮した前置きで始めた。
                ②押しつけや命令に聞こえないように、表現に注意して提案した。
                ③「この提案をしている理由」を相手が納得できるように伝えた。',
            ],


        ];
        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
          }
    }
}

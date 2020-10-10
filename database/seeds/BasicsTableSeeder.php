<?php

use Illuminate\Database\Seeder;
use App\Basic;


class BasicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basics = [
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'こんにちは、マイク',
                'english'=> 'Hi, Mike.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'こんにちは、ちょっと質問があります',
                'english'=> 'Hi, I just have a quick question.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'こんにちは,次の会議に関して質問があります',
                'english'=> 'Hi, I have a question about the next meeting.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'すみません',
                'english'=> 'Excuse me.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'ちょっといいですか？',
                'english'=> 'Do you have a minute?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'ちょっと伺ってもいいですか？',
                'english'=> 'Can I ask you something?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => '予算に関して、ちょっと伺ってもいいですか？',
                'english'=> 'Could I ask you a bit about your budget?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'こんにちは、メグ。　販売促進に関して、あなたと話したかったんです',
                'english'=> 'Hi, Meg. I wanted to talk to you about the sales promotion.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'もしもし、パーティの見積もりが必要でお電話しています',
                'english'=> 'Hello, I’m just calling to get an estimate for a party.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Introduction',
                'japanese' => 'お邪魔して申し訳ございませんが、ひょっとして電車の時間をご存知ですか？',
                'english'=> 'I’m sorry to bother you, but do you happen to know the times of the trains?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => 'この付近にカフェはありますか？',
                'english'=> 'Are there any cafes around here?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => '新しいチラシについてどう思いますか？',
                'english'=> 'What do you think about this new flyer?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => '旅行はどうでしたか？',
                'english'=> 'How was your trip?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => '航空までもっと早く行ける方法はなんでしょうか？',
                'english'=> 'What would be the fastest way to the airport?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => 'そのケータリングにいくらかかるか、ご存知ですか？',
                'english'=> 'Do you know how much the catering costs?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => 'どこでタクシーに乗れるか、ひょっとしてご存知ですか？',
                'english'=> 'Do you happen to know where I can get a taxi?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => '次の電車がいつ着くのか、ひょっとしてご存知ですか？',
                'english'=> 'Would you possibly know when the next train arrives?',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Question',
                'japanese' => 'お客様が何人なのかをご存知ないかしらと思いまして。',
                'english'=> 'I was wondering if you knew the number of guests.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Reason',
                'japanese' => 'あなたにこれをお尋ねするのは、全員に議題を送る必要があるからです。',
                'english'=> 'I’m asking you this because I need to send everyone the agenda.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Reason',
                'japanese' => '私はこれを知る必要があります、というのも、数字を確認しなくてはならないからです。',
                'english'=> 'I need to know this because I have to finalize the figures.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Reason',
                'japanese' => '私はこれを知りたく思っています。というのも、私たちのプロジェクトを左右することだからです。',
                'english'=> 'I’d like to know this because It’s critical for our project.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Reason',
                'japanese' => 'というのも、報告書を今日仕上げなくてはいけないのです。',
                'english'=> 'The thing is, I have to finish the report today.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => 'ありがとうこざいます。',
                'english'=> 'Thank you.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => 'どうもありがとうこざいます。',
                'english'=> 'Thank you so much.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => '素晴らしい!ありがとうごさいます。',
                'english'=> 'Great! Thanks.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => '助かります。ありがとうこざいます。',
                'english'=> 'That will be helpful. Thank you.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => '助けてくれてありがとうごさいます',
                'english'=> 'Thanks for your help.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => '分かりました、どうもありがとうごさいます。では、地下鉄を使います。',
                'english'=> '0K, thanks a lot. I　will take a subway then.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => '情報をいただき、本当に感謝します。',
                'english'=> 'I really appreciate your input.',
            ],
            [   
                'chapter_id' =>'Chapter1',
                'classification' => 'Thanks',
                'japanese' => 'ええ、私も同感です。',
                'english'=> 'Yeah, I feel the same way.',
            ],
            
        ];

        foreach ($basics as $basic) {
            Basic::create($basic);
          }
    }
}

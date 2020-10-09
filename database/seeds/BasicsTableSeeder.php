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
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Introduction',
                'japanese' => 'ちょっと時問ある？',
                'english'=> 'Got a minute?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Introduction',
                'japanese' => 'お願いがあるのですが。',
                'english'=> 'Can I ask you a favor?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Introduction',
                'japanese' => 'お邪魔してすみませんが、1つお願いできますか?',
                'english'=> 'I am sorry to bother you, but could you do me a favor?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Introduction',
                'japanese' => '値段について、少しお話しできますか?',
                'english'=> 'Can we talk a bit about the price?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Introduction',
                'japanese' => 'ご存じの通り、私たちは今月、大きなイベントを予定しこいます。',
                'english'=> 'As you know, we will be having a big event this month.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'この手紙を、私に代わって郵送してください。',
                'english'=> 'Please mail this letter for me.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'あなたの机を、きれいに片付けてほしいんです。',
                'english'=> 'I want you to clean off your desk.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'この本を、私に代わってオンラインで注文してくれますか？',
                'english'=> 'Will you order this book online for me?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => '正午までに私に報告書を送ってもらえますか？',
                'english'=> 'Can you send me the report by noon?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'キャンセルについて再検討をお願いしたいのです。',
                'english'=> 'I would like to ask you to reconsider your cancellation.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'この機器の使い方を教えていただけますか？',
                'english'=> 'Could you please tell me how to use this device?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => '配布資料の用意を手伝っていただけますでしょうか？',
                'english'=> 'Do you think you could help me prepare the handouts?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'データをダブルチェックしていただけないかと思いまして。',
                'english'=> 'I wonder if you could double-check the data.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => '明日、この機械を使ってもよろしいですか？',
                'english'=> 'Would it be OK if I use this machine tomorrow?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'もう一度議論することは可能でしょうか？',
                'english'=> 'Would it be possible to discuss it again?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => '会議の司会をしこいただくことはできないかと思っておりまして',
                'english'=> 'I was wondering if you could chair the meeting.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'プレゼンのスライドを私たちに共有していただけると、ありがたいのですが。',
                'english'=> 'I would appreciate it if you could share your presentation slides with us.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => '日時の変更をお願いしてもよろしいでしょうか?',
                'english'=> 'Would you mind if I asked you to reschedule?
                これら以外にも、依頼のニュアンスを和らげる表現（例：maybe「もしかすると」、 possibly「ひょっとして」、perhaps 「にとによると」など）を挿入することによって、 丁寧さをさらに強めることができます。',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Request',
                'japanese' => 'ひょっとして、値段を少しだけ下げていただくことは可能でしょうか？',
                'english'=> 'Could you possibly lower the price slightly?',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reason',
                'japanese' => 'これをあなたにお願いしている理由は、前回のイベントでのお仕事が素晴らしかったからです。',
                'english'=> 'I’m asking you to do this because you did a great job at the last event.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reason',
                'japanese' => 'この件について知る必要があるのは、海外からのお客さま方を迎える予定だからです。',
                'english'=> 'I need to know this because we’re  expecting a group of visitors from overseas.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reason',
                'japanese' => '単に、約束があって、オフィスをもうすぐ出ないといけないだけなのです。',
                'english'=> 'It’s  just that I need to leave the office soon for an appointment. ',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reduce the burden',
                'japanese' => 'もし今ご都合が悪ければ、ほかの人にお願いできますので。',
                'english'=> 'If you’re  not available now, I can just ask somebody else.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reduce the burden',
                'japanese' => 'すこくお忙しいようなら、結構です。',
                'english'=> 'If you’re too busy, that’s OK.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reduce the burden',
                'japanese' => '追加のお支払いをしても構いません',
                'english'=> 'I don’t mind paying extra.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Reduce the burden',
                'japanese' => '予算の問題があるようでしたら、単価について柔軟に対応することも可能です。',
                'english'=> 'If you have a budget issue, we can be flexible with the unit price.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => 'ありがとうございます。',
                'english'=> 'Thanks',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => 'とても助かります。',
                'english'=> 'This will be a big help for me.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => 'それは素晴らしい',
                'english'=> 'That will be great.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => 'あ、大丈夫です。',
                'english'=> 'Oh, hat’s OK.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => '問題ありません。',
                'english'=> 'No problem.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => '分かりました。',
                'english'=> 'I understand.',
            ],
            [   
                'chapter_id' =>'Chapter2',
                'classification' => 'Thanks',
                'japanese' => 'もちろんです。できるだけ早くお知らせくださいね。',
                'english'=> 'Of course. Just let me know as soon as you can.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => '私の提案を聞いてもらう時問は少しありますか?',
                'english'=> 'Do you have a moment to listen to my proposal?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'いい考えがあります。',
                'english'=> 'I have an idea.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'あるものをお薦めしてもいいですか？',
                'english'=> 'Can I suggest something?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'あなたにお伝えしたいことがあるのです。',
                'english'=> 'There is something I wanted to share with you.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => '発送日について、少し話せますか？',
                'english'=> 'Can we talk a bit about the shipping date?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'ちょっといいですか？ ',
                'english'=> 'Do you have a sec?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'ちょっと聞いてくれる？ ',
                'english'=> 'You know what?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => 'とても面白いですが、こういう見方をするのはどうでしょうか? ',
                'english'=> 'That’s really interesting, but how about looking at it this way?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Introduction',
                'japanese' => '特別なことは何もしていないけれど、ちょっとしたヒントを示しましよう。',
                'english'=> 'I don’t do anything special, but I’ll give you some pointers.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'お昼に行きましょう。',
                'english'=> 'Let’s go for lunch.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '修理の人を呼んだらどうですか？',
                'english'=> 'Why don’t you call a repairer?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'イベントを延期しませんか？',
                'english'=> 'Why don’t we put off the event?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '文字の大きさを変えるのはどうでしょう？',
                'english'=> 'How about changing the font size?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '来週、その販売計画について再検討できますか？',
                'english'=> 'Can we review the sales plan next week? ',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'あなたにはもう少し休息が必要です。',
                'english'=> 'You need some more rest.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => ' 私たちは、職場をもっと環境に優しいものにするよう努めるべきだと思います。',
                'english'=> 'I think we should try to make our office more environmentally friendly.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'この部屋を出る際には、ドアに鍵を掛けることがとても大切です',
                'english'=> 'It’s really important to lock the door when you leave this room.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '試す価値はあると思います。',
                'english'=> 'I think it’s worth trying.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'ケータリングサービスを使うのは、いい案かもしれません。',
                'english'=> 'Using a catering service may be a good idea.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '次の会議で、それをみんなに思い出させた方がいいかもしれません。',
                'english'=> 'You might want to remind everyone of it at the next meeting.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '彼らが技術者を何人か募集しているのを知っていましたか?',
                'english'=> 'Did you know they were looking for a few engineers?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '在宅勤務を検討したことはありますか？',
                'english'=> 'Have you considered working remotely from home?',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => 'メールマガジンの配信頻度を増やしてはどうかと考えていました。',
                'english'=> 'I was thinking of sending out our email newsletters more often.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Suggestion',
                'japanese' => '私なら、できるだけ早くIT部門に電話しますね。',
                'english'=> 'I would call the IT department as soon as possible.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Reason',
                'japanese' => '私たちには今日、話し合うトビックがたくさんあるからです。 ',
                'english'=> 'Because we have many topics to cover today.',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Reason',
                'japanese' => 'これをお薦めする理由は、従来のやり方よりずっと早いからです。 ※フォーマルな表現。',
                'english'=> 'The reason why we suggest this is because it’s much faster than the traditional practice. 
                ★以前のChapterと同様、理由だからといってbecauseを使うとは限りません。
                ・Why don’t you come over? Karen and Bart will be there, too.
                来ませんか？カレンとバートも来るので。',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Reminder',
                'japanese' => 'ぜひ来てください！',
                'english'=> 'You should come!',
            ],
            [   
                'chapter_id' =>'Chapter3',
                'classification' => 'Reminder',
                'japanese' => 'どんなときも、重要な書類のバックアップを取るのは得策です。',
                'english'=> 'It’s always a good idea to back up important documents.',
            ],
            
        ];

        foreach ($basics as $basic) {
            Basic::create($basic);
          }
    }
}

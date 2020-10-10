<?php

use Illuminate\Database\Seeder;
use App\Conversation;


class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conversations=[
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'Try1',
                'mission' => 'あなたは、取引先の新製品発売イベントに招待されました。「午後2時から会議室B(Meeting Room B）で」行われるのですが、会議室Bの場所が分からないので、近くにいた人に質問することにしました。',
                'japanese' => 'あなた:
                こんにちは。お邪魔してすみませんが、会議室Bがどこにあるか、ひょっとしてご存じですか？午後2時から始まる新製品発表会に出席するために来たのですが。 
                
                相手:
                ええ、それなら2階ですよ。
                
                あなた:
                ありがとうございます。',
                'english' => 'You:
                Hello, I’m sorry to bother you, but do you happen to know where Meeting Room B is？ I’m here to attend a launch event for a new product that’s to be held at 2 p.m. 
                
                Person I am speaking to:
                Sure, it’s on the second floor.
                
                You:
                Thank you.',
                'explanation' => '話題は軽いものですが、相手が取引先の建物で会った見知らぬ人なので、Hello, I’m sorry to bother you, but （こんにちは。お邪魔してすみませんが）という前置きの表現で始め、失礼のないように配慮して話し掛けています。もう少し単純な表現のExcuse me, but（すみませんが）で始めてもOKです。 質問自体も、Where is Meeting Room B？と疑問詞を使って直接的に尋ねるのはなく、 間接疑問文を使い、Do you happen to know〜？（ひょっとして〜をご存知ですか？) の形で尋ねることで、遠慮や丁寧さを表現しています。このように、見知らぬ人に時問を割いてもらい、何か教えてもらうようなときは、普段より丁寧な姿勢を心掛けましょう。',
                'tip' => '',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'Unit1',
                'mission' => '海外出張を来週に控えたあなたのもとに、上司から「提案書を予定より早く 送ってほしいとのメールが届きました。期限は現地到着の翌朝で、飛行機の中で仕事をするしかなさそうです。そのため、あなたは、今持っているもの より小型のノートパソコン（laptop）を社内調達したいと思っています。担当 部署の人に、小型ノートパソコンを借りられるか尋ねなさい。

                MAIL
                The meeting date has been moved forward, and we need the proposal by Tuesday morning at the latest. I know you’ll be overseas next week, but could you finish the proposal and send it to everyone as soon as possible? Thanks for your help.',
                'japanese' => 'あなた:
                ちょっと質問があるのですが。出張に持っていける、より小型のノートパソコンはありますか？どうしても、火曜日の朝まで、つまり向こうに着く日の朝までに、（関係者）全員に提案書を送る必要がありまして。フライトの間にも多少作業をする必要がありそうで、もっと小さく て軽いノートパソコンが必要になりそうなのです。
                
                相手:
                用意できるかどうか調べてみますね。
                
                あなた:
                そうですか、ありがとうございます。',
                'english' => 'You:
                I have a question. Are there any smaller laptops I could take on my business trip？ I really need to send everyone the proposal by Tuesday morning, the first morning after my arrival. So, I’ll have to get some work done during the flight, and I’ll need a smaller and lighter laptop.
                
                Person I am speaking to:
                Let me check the availability.
                
                You:
                OK, thanks.',
                'explanation' => 'ここでのポイントは、相手を動かすだけの「理由」をいかに具体的に伝えられるかです。 相手は社内の人で、話題もそれほど深刻なものではないので、ことさら遠慮深く話す必要はありませんが、相手が心の準備をできるように前置きした後で、[知りたいこと」を伝え、「なぜ問い合わせているのか」（理由）を続けます。 理由の部分では、この例のように I really need to send A B（どうしてもAにBを送る必要がある）や I’ll get some work done（多少作業をする必要がありそう）を使って、切羽詰まった状況を伝えるといいでしよう。',
                'tip' => '  質問に理由を付け加えることには、「相手に不審な気持ちを抱かせずに抵抗なく情報を提供してもらう」「自分の状況を伝えて、相手に味方になってもらう」といった効果があります。例えば、次のような個人情報など、立ち入ったことを尋ねる場合には、理由を添えるのが普通です。
                Do you happen to know Mr. Chen’s email address? I need to send him some files right away.
                （チェンさんのメールアドレスをひょっとして知らない？すぐにファイルを送る必要があって）
                    一方、軽い話題のときや、理由が明らかなときなど、質間に理由を付ける必要がない場合もよくあります。現在の時刻や、場所の情報をシンプルに尋ねる場合などです。 
                時刻：What time is it?（今何時ですか？) 
                場所：Is there any place where I can change money around here?（この辺りに両替ができるところはありますか？)',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'exUnit1',
                'mission' => 'あなたは外国の街角にいます。Wi-Flを使う必要が生じましたが、無料のWi-Flスポットが見当たりません。そこで、見知らぬ人に尋ねることにしました。',
                'japanese' => 'あなた:
                お邪魔してすみませんが、この辺りに無料のWi-Fiスポットがあるかどうか、ひょっとしてご存じですか？

                相手:
                向こうの力フェが無料でWi-Fiを提供していると思いますよ。

                あなた:
                どうもありがとうございます！',
                'english' => 'You:
                I’m sorry to bother you, but do you happen to know if there are any free Wi-Fi spots around here? 

                Person I am speaking to:
                I think the cafe over there provides free Wi-Fi. 

                You:
                Thanks so much!',
                'explanation' => '旅先で見知らぬ人に尋ねる場面なので、礼儀正しく切り出す必要があります。I’m sorry to bother you, butと前置きした後、happen to knowと間接疑問を組み合わせて、do you happen to know if there are any ~?（ひょっとして～があるかどうかご存じですか？）のように尋ねると、かなり相手に配慮した表現になります。前置きの表現は、もう少しシンプルなExcuse me, but（すみませんが）などでもいいでしょう。 なお、話題自体は場所を尋ねるという軽いもので、相手に負担を与える質問でもないので、質問の理由をわざわざ言う必要はないでしょう。',
                'tip' => '',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'Unit2',
                'mission' => 'ニューヨークに出張したあなたが空港に着いて携帯電話を確認したところ、留守番電話に上司からのメッセージが入っていました。この後マンハッタンで会う予定の相手のところに、できるだけ早く行ってほしい、とのことです。上司からのメッセージを聞いて、空港の案内力ウンターの人に、一番早く マンハッタンに行ける方法を尋ねなさい。
                
                留守番電話
                Hi,Jun. This is Tom. How was your flight? Are you now at JFK? Mr. Harrison says he has to meet with another client after the meeting. So, could you get to his office as soon as possible? There should be several options, such as by bus, train or taxi. Maybe you could ask someone what would be the fastest way.
                
                訳
                もしもし、ジュン。トムです。空の旅はどうだった？今はJFK空港かな？ハリソンさんは、会合の後で別のクライアントに会わなければならないそうなんだ。だから、できるだけ急いで彼のオフィスに行ってもらえるかな？選択肢は幾つかあるはずだよ、バス、電車、タクシーなどが使える。どれが一番早い行き方か、誰かに聞いてみるといいかもしれない。',
                'japanese' => 'あなた：
                すみません。ここからマンハッタンに行く一番早い方法は何でしょうか？幾つか選択肢があるようで、バス、電車、タクシーのどれでそこまで行けばいいのか分からないんです。会合があって、とにかくできるだけ早く行きたいのですが。
                
                相手：
                そうですね、１日のうちこの時間帯は、道路がそれほど混んでいないので、お急ぎなら、タクシーが問違いなく早いでしょうね、もっとも、一番高くつきますが。でもやはり、その大荷物があるなら、電車やバスの利用はお勧めしません。
                
                あなた：
                分かりました、ありがとうございます。それならタクシーにします。',
                'english' => 'You:
                Excuse me. What would be the fastest way to get to Manhattan from here？It seems there are several options, so I’m not sure if I should get there by bus, train or taxi. I just want to get there as soon as possible for a meeting. 
                
                Person I am speaking to:
                Well, traffic is not so heavy around this time of day, and if you are in a rush, a taxi would definitely be the fastest way, though it’s the most expensive. Still, with your heavy baggage, I wouldn’t recommend taking a train or bus. 
                
                You:
                OK, thanks! I’ll take a taxi then.',
                'explanation' => '空港の案内力ウンターなどでは、前置きはシンプルに済ませ、聞き出したい情報についてズバリと尋ねるのがいいでしょう。ここでは、問接疑問文にせずに、What would be the fastest way to ~?（〜する一番早い方法は何でしょうか？）という、疑問詞で始まる文にしています。
                「理由」で、for a meetingと用件の内容を具体的に伝えている点にも注意しましょう。こう言うことで、重大さを相手に分かってもらえるという効果があります。なお、このような場面では、情報提供へのお礼に加えて、相手がくれた情報に基づく自分の決断（どうすることにしたか)を伝えるといいでしょう。',
                'tip' => '問い合わせをする際には、常に’be specific（明確／具体的である)’を、心掛けましょう。例えば、「いつまでに何が必要」といった事情を、正確な日時（何曜日の何時など）を交えて具体的に示すことで、問い合わせの意図が相手に明確に伝わります。
                一つの方法として、if節に疑問文を続ける形を覚えておくと便利です。 その文に、自分の要望（質問している理由）を続ければ、相手はあなたの状況や知りたい情報を理解しやすくなります。 
                If I order the item today, when would I be able to receive it? I would like to get it by Thursday. 
                （今日その品物を注文したら、いつ受け取ることができるでしょう？木曜日までに入手したいのですが） 
                If I want to arrive at the airport no later than 7:00 p.m., what time should I catch the train? My flight is at 8:30. 
                （午後7時までに空港に到着したければ、何時の電車に乗るべきでしょう？私のフライトは8時30分なんです）',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'exUnit2',
                'mission' => 'あなたは、友人の誕生日プレゼントに、オンラインでティーセットを買おうとしています。友人の誕生日が今週の土曜日なので、 その前に受け取れるかどうかを、電話で問い合わせることにしました。 ',
                'japanese' => '相手:
                ゴールドE・ショッピングです。ご用件をお伺いします。
                
                あなた:
                こんにちは。出荷の予定について質問があるのです。今日、そちらのウェブサイトでティーセットを注文したら、東京の私の部屋に届くまでにどれくらいかかるでしょうか？友人の誕生日が今週の土曜日なので、その前に受け取りたいのですが。
                
                相手:
                はい、午後5時までにご注文いただいた品は当日出荷し、到着までにかかる日数は2、3日です。ですから、本日ご注文されれば、遅くとも金曜日にはお手元に届くはずです。
                
                あなた:
                よかった！では今すぐ注文します。ありがとうございます！',
                'english' => 'Person I am speaking to:
                GoId-E Shopping. How may I help you? 
                
                You:
                Hi, I have a question about your shipment schedule. lf I order a tea set on your website today, how long would it take to arrive at my apartment in Tokyo? My friend’s birthday is this Saturday, and I’d like to receive it before then. 
                
                Person I am speaking to:
                Yes, any order placed before 5 p.m. will be shipped the same day and will take two to three days to arrive. So, if you order today, it should get to your place by Friday at the latest. 
                
                You:
                Great! I’m going to order it right now, then. Thanks!',
                'explanation' => 'さまざまな問い合わせを受ける力スタマーセンターのようなところに連絡をする際には、このように、まず「前置き」で、「何に関する問い合わせか」を伝えると効果的です。ここではyour shipment scheduleの部分で、質問の概要が相手に伝わりますね。
                受け取りの時期を正確に把握するため、if節（If I order ~）に疑問文（how long would it take ~？）を続けた形を使っています。ここで大切なのは、「理由」です。土曜日の友人の誕生日に間に合わせたいという「問い合わせの意図」を明らかにすることで、相手は「今日注文すれば遅くとも金曜日には届くはず（if you order today, it should get to your place by Friday at the latest）と、あなたが聞き出したかった情報を端的に提供してくれています。 ',
                'tip' => '',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'Unit3',
                'mission' => 'あなたは旅行会社で、受注を担当しています。ある顧客から、出張のためのフライトとホテルを予約したいとの電話がありました。価格次第でさまざまな選択肢があるので、まずはその顧客に、予算について質問したいと思っています。費用はどのくらいを考えているか、また、勤め先には使える費用の上限 があるかを尋ねなさい。
                
                📞
                Hello. This is Jane Porter from ACE Corporation. I’m calling to book my flights and a hotel room for my next business trip to Shanghai. I’ll depart from Kansai International Airport next Wednesday and return to Osaka the following Monday. Can you check flight availability and suggest some hotels in downtown Shanghai?',
                'japanese' => '相手:
                もしもし。ACEコーポレーションのジェーンポーターです。上海への出張のためのフライトとホテルを予約したくてお電話しています。次の水曜日に関西国際空港を出発して、翌週の月曜日に大阪に戻ってくる予定です。フライトの空き状況を調べて、上海の繁華街のホテルを見繕ってもらえますか？
                
                あなた:
                承知しました、ポーターさま。喜んで手配させていただきます。ではまず、ご出張の予算について少々お伺いできますか？フライトとご宿泊先においくらぐらいをお考えでしょうか？お勤め先では、飛行機の座席やホテル料金に関する制限がありますか？というのも、当社では、お考えの価格帯によって、非常に幅広い選択肢を用意しておりますので。 
                相手:
                分かりました、当社の出張規定を確認させてください。30分ほどでかけ直して、詳しい情報をお知らせします。
                
                あなた:
                それは助かります。ありがとうございます。ではまた後ほど、ポーターさま。',
                'english' => 'Person I am speaking to:
                Hello. This is Jane Porter from ACE Corporation. I’m calling to book my flights and a hotel room for my next business trip to Shanghai. I’ll depart from Kansai International Airport next Wednesday and return to Osaka the following Monday. Can you check flight availability and suggest some hotels in downtown Shanghai? 
                
                You:
                Sure, Ms. Porter. I would be happy to arrange a trip for you. So, first, could I ask you a bit about your travel budget？Do you know how much you’d like to spend on the flight and accommodation? Does your company have any restrictions regarding airplane seating or hotel pricing？The thing is, we have a great many options, depending on your price range.
                
                Person I am speaking to:
                OK, let me check our company’s travel policy, and I’ll get back to you with more details in about 30 minutes. 
                
                You:
                That’ll be helpful. Thank you, and talk to you soon, Ms. Porter.',
                'explanation' => '顧客への対応なので、表現選びには細心の注意を払いましよう。ここではまず、「前置き」でcould I ask you a bit about~?(～について少々お伺いできますか？) と、助動詞の過去形を使った丁寧なニュアンスの疑問文で許可を求めています。また、「質問」の文でも、Do you know~（〜をご存じですか）で始まる問接疑問文に、how much you’d like to spend on~(～にいくらなら費やしてもいいか）という、助動詞の過去形を使った表現を組み合わせて、フライトと宿泊に使える予算について控えめに尋ねています。 
                「理由」で使われているThe thing is,~は、「なぜこれを質問しているのかというと、実は～」といったニュアンスの、要点を説明する表現です。 なお、ここでは相手が初めに名乗っているので、それを受けて要所要所でMs. Porter と名前を呼び掛けるようにすると、「親身な対応をしてくれている」と感じてもらえるでしょう。',
                'tip' => 'ここでは、英語で金額や予算、費用に関して尋ねる際の頻出表現を押さ えておきましょう。 まず、基本語句としては、budget（予算）、quote(～に…を見積もる、 見積もり）、quotation（見積もり）、estimate(～を概算する、見積もり、概 算）、cost(～に「・・・の金額を」費やさせる、コスト）、price range（金額枠、 価格帯）などがあります。quoteやestimate、costは、動詞としても名詞としてもよく使われます。 
                以下は、これらの語句を使った例文です。日常生活やビジネスによく登場する言い回しですから、使い方を確認し、身に付けておくといいでしょう。 
                Could you give us a quotation for the services?
                （そのサービスの見積もりをいただけますか？) 
                Could I get an estimate for remodeling the bathroom?
                （バスルームの改装の概算をいただけますか？) 
                Can you estimate how much it would cost to repair my car, please?
                （私の車の修理にどのくらいかかりそうか、見積もってもらえますか？) 
                What is your price range?
                （お考えの価格帯はどのくらいですか？) 
                What price range would you be thinking about?
                （どのくらいの予算幅をお考えでしょうか？) 
                ',
            ],
            [
                'chapter_id' => 'Chapter1',
                'unit' => 'exUnit3',
                'mission' => 'あなたは、自宅で使っているプリンターが故障したため、修理費を見積もってもらおうと、販売店に電話をかけました。かなり古い製品なので、修理費によっては新しく買い替えてもいいと思っています。',
                'japanese' => '相手:
                もしもし。バックス・アプライアンスです。ご用件を伺います。 
                
                あなた:
                もしもし、プリンターの修理費の見積もりをいただきたくてお電話しているのですが。D0cFX-5の2010年モデルで、7年前に購入しました。最近、黒のインクカートリッジの液漏れがひどいんです。修理費によっては、新しいモデルを買うことにするかもしれません。 
                
                相手:
                承知しました、修理費のお見積もりをお出ししますね。私どものウェブサイトのフォームに詳細を入力していただけますか?1日以内に、力スタマーサポートの者からご連絡しますので。
                
                あなた:
                分かりました。ありがとうございます。',
                'english' => 'Person I am speaking to:
                Hello. Pax Appliance. May I help you?
                
                You:
                Hello, I’m just calling to get an estimate for repairs for a broken printer. It’s a DocFX-5 2010 model, and I bought it seven years ago. My black ink cartridge has been leaking a lot lately. Depending on the repair cost, I might just get a new model. 
                
                Person I am speaking to:
                OK, I can give you an estimate for the repairs. Could you fill out the form on our website with all the details? And somebody from Customer Support will get back to you within a day. 
                
                You:
                Sure thing. Thanks for your help.',
                'explanation' => 'ここでは自分が顧客という立場なので、丁寧さへの配慮よりも、欲しい清報を得るためにいかに具体的に状況を伝えるかがポイントとなります。「前置き」の後半のI’m just calling to get an estimate for ~（
                〜の見積もりをもらうために電話している）は、これ自体「問い合わせ」と捉えることもできます。この場面では、こう言って電話の目的を述べることで、「どんな情報が欲しいのか」まで相手に伝えています。「理由」では、品名（何年のモデルか）、使用年数、故障の状態などの詳細を伝えた上で、I might just get a new modelと買い替えの可能性も伝えています。こうした具体的な情報を提供することで、相手が事情や要望を正確に把握し、次に取るべきアクションを教えてくれるという流れができています。',
                'tip' => '',
            ],
            
        ];

        foreach ($conversations as $conversation) {
            Conversation::create($conversation);
          }
    }
}

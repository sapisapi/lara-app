<?php

use Illuminate\Database\Seeder;
use App\Classification;


class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications=[
            [
                'chapter_id' => 'Chapter1',
                'classification' => 'Introduction',
                'classification_sub' => '「こんにちは、すみませんが」',
                'classification_des' => 'いきなり質問を切り出すのではなく、「質問がある」と伝えたり、相手の注意を引いたりして、まず相手に心の準備をしてもらいましょう。',
            ],
            [
                'chapter_id' => 'Chapter1',
                'classification' => 'Question',
                'classification_sub' => '「〜をご存じですか？」',
                'classification_des' => '実際に知りたいことを尋ねます。シンプルな疑問文による単刀直入な尋ね方から、I was wondering if ...（...かしらと思っていまして）という遠回しな形まで、話題の重さや相手との関係を考慮して、さまざまな丁寧さの質問を使い分けましよう。',
            ],
            [
                'chapter_id' => 'Chapter1',
                'classification' => 'Reason',
                'classification_sub' => '「なぜなら、～する必要があるんです」',
                'classification_des' => '理由が明らかな場合や、ごく単純な質問には、理由を添えないこともよくあります。 ただし、一歩踏み込んだ質問をするときなどには、「その情報が必要な理由」を伝えて、相手が抵抗なく情報提供できるようにしましょう。',
            ],
            [
                'chapter_id' => 'Chapter1',
                'classification' => 'Thanks',
                'classification_sub' => '「ありがとうこざいます」',
                'classification_des' => '情報提供への感謝や、相手の意見への共感を伝えます。答えてくれた相手を思いやる 気持ちを示しましよう。',
            ],
            [
                'chapter_id' => 'Chapter2',
                'classification' => 'Introduction',
                'classification_sub' => '「こんにちは、すみませんが」',
                'classification_des' => 'いきなり依頼や指示を切り出すのではなく、「お願いしたいことがある」と伝えたり、 相手の注意を引いたりして、まず相手に心の準備をしてもらいましよう。',
            ],
            [
                'chapter_id' => 'Chapter2',
                'classification' => 'Request',
                'classification_sub' => '「〜していただくことはできますか？」',
                'classification_des' => '依頼は基本的に、相手に負担を掛ける言語行為ですから、Can you ~？、 Could you ~？といった疑問文の形で、相手の状況や意向に配慮を示し、一方的・高圧的になるのを避けるケースが多くなります。また、より丁寧にするために、遠回しな表現や間接疑問文、表現を和らげる副詞などが使われる傾向もあります。',
            ],
            [
                'chapter_id' => 'Chapter2',
                'classification' => 'Reason',
                'classification_sub' => '「なぜなら、～する必要があるんです」',
                'classification_des' => '「依頼」の後、または前に来ます。理由が明らかな場合や、依頼内容がごく簡単な場合には、わざわざ理由を言わないこともあります。ただし、重大な依頼や、相手の負担が大きそうな依頼の場合は、確実に「相手を動かす」ために、理由を詳しく伝え、納得してもらう必要があります。',
            ],
            [
                'chapter_id' => 'Chapter2',
                'classification' => 'Reduce the burden',
                'classification_sub' => '「〜しても構いません」',
                'classification_des' => '必要に応じて、この要素を入れます。難しい依頼をする際などに、相手に断る余地や条件提示の余地を与えることで、強引でない、相手に配慮した丁寧な依頼となります。',
            ],
            [
                'chapter_id' => 'Chapter2',
                'classification' => 'Thanks',
                'classification_sub' => '「ありがとうこざいます」',
                'classification_des' => '依頼を受け入れてもらったら、感謝の気持ちを必ず伝えましょう。断られた場合も、了解したことを伝える応答は必要です。',
            ],
            [
                'chapter_id' => 'Chapter3',
                'classification' => 'Introduction',
                'classification_sub' => '「ちょっといいですか？」',
                'classification_des' => '相手のためを思った提案や助言であっても、いきなり切り出すことは避け、まずは「提案（または助言）したいことがある」というサインを出しましょう。相手への肯定的な 発言で始めるのも効果的です。ただし、相手の求めに応じる形で提案や助言をするような場合は、前置きを省略することもよくあります。',
            ],
            [
                'chapter_id' => 'Chapter3',
                'classification' => 'Suggestion',
                'classification_sub' => '「〜しませんか？」',
                'classification_des' => '具体的な提案や助言を伝えます。学校で習うおなじみの語句 should、 must. ought to、 had betterなどを頻繁に使う人が多いのですが、実際にはこれらよりも、控えめで間接的な表現が使われる傾向があります。',
            ],
            [
                'chapter_id' => 'Chapter3',
                'classification' => 'Reason',
                'classification_sub' => '「というのも、〜だからです」',
                'classification_des' => '提案・助言している理由を伝えましょう。なぜそうした方がいいのか、それによってどんな利益が生じるか、などを具体的に示すことが大切です。',
            ],
            [
                'chapter_id' => 'Chapter3',
                'classification' => 'Reminder',
                'classification_sub' => '「是非〜してみては？」',
                'classification_des' => '「ぜひお薦めしたい」「十分に注意してほしい」といった気持ちを込めて、提案や助言を再び述べて締めくくる場合に使います。不要であれば入れなくても構いません。',
            ],
            

        ];
        foreach ($classifications as $classification) {
            Classification::create($classification);
          }
    }
}

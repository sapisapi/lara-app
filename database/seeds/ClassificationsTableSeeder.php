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
            
        ];
        foreach ($classifications as $classification) {
            Classification::create($classification);
          }
    }
}

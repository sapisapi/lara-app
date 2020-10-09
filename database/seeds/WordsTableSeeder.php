<?php

use Illuminate\Database\Seeder;
use App\Word;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
            [
              'user_id'   => 1,
              'japanese'   => 'これはテスト投稿1',
              'english'   => 'Test1',
            ],
            [
              'user_id'   => 1,
              'japanese'   => 'これはテスト投稿2',
              'english'   => 'Test2',
            ],
            [
              'user_id'   => 2,
              'japanese'   => 'これはテスト投稿3',
              'english'   => 'Test2',
            ],
          ];
   
          foreach ($words as $word) {
            Word::create($word);
          }
    }
}

<?php

namespace App\Http\Controllers;

use App\Word;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;


class WordController extends Controller
{
    public function index()
    {
        $words = Word::all()->sortByDesc('id');
        return view('word.index',compact('words'));
    }

    public function create()
    {
        return view('word.create');
    }

    public function store(WordRequest $request)
    {
        $japanese    = $request->input('japanese');
        $english    = $request->input('english');

        $word  = new Word;
        $params = [
        'user_id' => Auth::id(),
        'japanese' => $japanese,
        'english' => $english,
        ];
        if (!$word->wordSave($params)) {
        // 登録失敗
        return redirect()->route('word.create')->with('error_message', 'Regist word failed');
        }
        return redirect()->route('word.index')->with('flash_message', 'regist success!!');
    }
}

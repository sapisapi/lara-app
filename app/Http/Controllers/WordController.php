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
        $words = Word::where('user_id',Auth::id())->get()->sortByDesc('id');
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

    public function edit($id)
    {
        $word = Word::find($id);

        if(is_null($word)){
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('word'));
        }
        return view('word.edit', compact('word'));
    }

    public function update(WordRequest $request, $id)
    {
         $word  = Word::find($id);
         $japanese    = $request->input('japanese');
         $english    = $request->input('english');
         $params = [
         'user_id' => Auth::id(),
         'japanese' => $japanese,
         'english' => $english,
         ];
         if (!$word->wordSave($params)) {
         // 登録失敗
         return redirect()->route('word.edit')->with('error_message', '編集失敗');
         }
         return redirect()->route('word.index')->with('flash_message', '編集成功!!');
    }

    public function destroy($id)
    {
        $word = Word::find($id);
        if (!$word->delete()) {
        return redirect()->route('word.index')->with('error_message', '削除失敗');
        }
        return redirect()->route('word.index')->with('flash_message', '削除成功!!');
    }

}

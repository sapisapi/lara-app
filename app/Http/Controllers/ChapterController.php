<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;
use App\Chapter;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();
        return view('chapter.index',compact('chapters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapter = Chapter::with('classifications')->find($id);

        return view("chapter.show",compact('chapter'));
    }

    public function create()
    {
        return view('chapter.create');
    }

    public function store(ChapterRequest $request)
    {
         $chapter_id = $request->input('chapter_id');
         $chapter_sub = $request->input('chapter_sub');
         $description = $request->input('description');
         $check = $request->input('check');

         $chapter  = new Chapter;
         $params = [
         'chapter_id' => $chapter_id,
         'chapter_sub' => $chapter_sub,
         'description' => $description,
         'check' => $check,
         ];
         if (!$chapter->chapterSave($params)) {
         // 登録失敗
         return redirect()->route('chapter.create')->with('error_message', 'Regist failed');
         }
         return redirect()->route('chapter.index')->with('flash_message', 'Regist success!!');
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);

        if(is_null($chapter)){
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('chapter'));
        }
        return view('chapter.edit', compact('chapter'));
    }

    public function update(ChapterRequest $request, $id)
    {
        $chapter  = Chapter::find($id);
        $chapter_id = $request->input('chapter_id');
        $chapter_sub = $request->input('chapter_sub');
        $description = $request->input('description');
        $check = $request->input('check');

        $params = [
        'chapter_id' => $chapter_id,
        'chapter_sub' => $chapter_sub,
        'description' => $description,
        'check' => $check,
        ];
        if (!$chapter->chapterSave($params)) {
        // 登録失敗
        return redirect()->route('chapter.edit')->with('error_message', 'Regist failed');
        }
        return redirect()->route('chapter.index')->with('flash_message', 'Regist success!!');
    }
}

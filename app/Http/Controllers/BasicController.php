<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Classification;
use App\Chapter;

use Illuminate\Http\Request;
use App\Http\Requests\BasicRequest;


class BasicController extends Controller
{
    public function show($id)
    {
        $some = Classification::where('chapter_id',$id)->get()->sortBy('id');;
        $basics = Basic::where('chapter_id',$id)->get()->sortBy('id');;
        $chapter = Chapter::where('chapter_id',$id)->first();
        $i=0;
        $values = [];
        foreach($some as $class){
            $u=0;
            foreach($basics as $basic){
                if($class->classification == $basic->classification){
                    $values[$i][$u]=['id' => $basic->id, 'japanese' => $basic->japanese, 'english' => $basic->english];
                    $u = $u + 1;
                }
            }
            $i = $i + 1;
        }
        return view("basic.show",compact('some','chapter','values'));
    }
    
    public function create($id)
    {
        $one=Classification::where('id',$id)->first();
        $basics=Basic::where('chapter_id',$one->chapter_id)->where('classification',$one->classification)->get();
        return view('basic.create',compact('one','basics'));
    }

    public function store(BasicRequest $request)
    {
         $chapter = $request->input('chapter_id');
         $classification = $request->input('classification');
         $japanese = $request->input('japanese');
         $english = $request->input('english');

         $basic  = new Basic;
         $params = [
         'chapter_id' => $chapter,
         'classification' => $classification,
         'japanese' => $japanese,
         'english' => $english,
         ];
         if (!$basic->basicSave($params)) {
         // 登録失敗
         return redirect()->route('basic.create')->with('error_message', 'Regist failed');
         }
         return redirect()->back()->with('flash_message', 'Regist success!!');
    }

    public function edit($id)
    {
        $basic = Basic::find($id);

        if(is_null($basic)){
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('basic'));
        }
        return view('basic.edit', compact('basic'));
    }

    public function update(BasicRequest $request, $id)
    {
        $basic  = Basic::find($id);
        $chapter = $request->input('chapter_id');
        $classification = $request->input('classification');
        $japanese = $request->input('japanese');
        $english = $request->input('english');

        $params = [
        'chapter_id' => $chapter,
        'classification' => $classification,
        'japanese' => $japanese,
        'english' => $english,
        ];
        if (!$basic->basicSave($params)) {
        // 登録失敗
        return redirect()->route('basic.edit')->with('error_message', 'Regist failed');
        }
        return redirect()->route('basic.show',$id=$chapter)->with('flash_message', 'Regist success!!');
    }

    public function destroy($id)
    {
        $basic = Basic::find($id);
        if (!$basic->delete()) {
        return redirect()->back()->with('error_message', 'Failed');
        }
        return redirect()->back()->with('flash_message', 'Deleted!!');
    }
}

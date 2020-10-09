<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassificationRequest;
use App\Classification;
use App\Chapter;



class ClassificationController extends Controller
{
    public function index()
    {
        $classifications = Classification::groupBy('chapter_id')->get('chapter_id');
        return view('classification.index',compact('classifications'));
    }
    public function show($id)
    {
        $classification = Classification::where('id',$id)->first();

        return view("classification.show",compact('classification'));
    }

    public function create($id)
    {
        $chapter=Chapter::where('chapter_id',$id)->first('chapter_id');
        return view('classification.create',compact('chapter'));
    }

    public function store(ClassificationRequest $request)
    {
         $chapter_id = $request->input('chapter_id');
         $classification = $request->input('classification');
         $classification_sub = $request->input('classification_sub');
         $classification_des = $request->input('classification_des');

         $classes  = new Classification;
         $params = [
         'chapter_id' => $chapter_id,
         'classification' => $classification,
         'classification_sub' => $classification_sub,
         'classification_des' => $classification_des,
         ];
         if (!$classes->classificationSave($params)) {
         // 登録失敗
         return redirect()->route('classification.create')->with('error_message', 'Regist failed');
         }
         return redirect()->route('chapter.index')->with('flash_message', 'Regist success!!');
    }

    public function edit($id)
    {
        $classification = Classification::find($id);

        if(is_null($classification)){
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('chapter'));
        }
        return view('classification.edit', compact('classification'));
    }

    public function update(ClassificationRequest $request, $id)
    {
        $class  = Classification::find($id);
        $classification = $request->input('classification');
        $classification_sub = $request->input('classification_sub');
        $classification_des = $request->input('classification_des');
        $params = [
           'classification' => $classification,
           'classification_sub' => $classification_sub,
           'classification_des' => $classification_des,
        ];
        if (!$class->classificationSave($params)) {
        // 登録失敗
        return redirect()->route('classification.edit')->with('error_message', 'Failed');
        }
        return redirect()->route('chapter.index')->with('flash_message', 'updated!!');
    }
    public function destroy($id)
    {
        $classification = Classification::find($id);
        if (!$classification->delete()) {
        return redirect()->route('chapter.index')->with('error_message', 'Delete user failed');
        }
        return redirect()->route('chapter.index')->with('flash_message', 'delete success!!');
    }
}

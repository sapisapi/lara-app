<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\Chapter;
use Illuminate\Http\Request;
use App\Http\Requests\ConversationRequest;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conversation.index');
    }

    public function show($id)
    {
        $unit = Conversation::with('chapter')->where('id',$id)->first();
        $prev = Conversation::where('chapter_id',$unit->chapter_id)->where('id', '<', $unit->id)->orderBy('id', 'desc')->limit('1')->first('id');
        $next = Conversation::where('chapter_id',$unit->chapter_id)->where('id', '>', $unit->id)->orderBy('id')->limit('1')->first('id');
        if($unit === null){
            abort(404);
        }
        return view("conversation.show",compact('unit','prev','next'));
    }

    public function create($id)
    {
        $chapter=Chapter::where('chapter_id',$id)->first('chapter_id');
        return view('conversation.create',compact('chapter'));
    }

    public function store(ConversationRequest $request)
    {
         $chapter = $request->input('chapter_id');
         $unit = $request->input('unit');
         $mission = $request->input('mission');
         $japanese = $request->input('japanese');
         $english = $request->input('english');
         $explanation = $request->input('explanation');
         $tip = $request->input('tip');

         $conversation  = new Conversation;
         $params = [
         'chapter_id' => $chapter,
         'unit' => $unit,
         'mission' => $mission,
         'japanese' => $japanese,
         'english' => $english,
         'explanation' => $explanation,
         'tip' => $tip,
         ];
         if (!$conversation->conversationSave($params)) {
         // 登録失敗
         return redirect()->route('conversation.create')->with('error_message', 'Regist failed');
         }
         return redirect()->route('chapter.show',$id=$chapter)->with('flash_message', 'Regist success!!');
    }

    public function edit($id)
    {
        $conversation = Conversation::find($id);

        if(is_null($conversation)){
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('conversation'));
        }
        return view('conversation.edit', compact('conversation'));
    }

    public function update(ConversationRequest $request, $id)
    {
        $conversation  = Conversation::find($id);
        $chapter = $request->input('chapter_id');
        $unit = $request->input('unit');
        $mission = $request->input('mission');
        $japanese = $request->input('japanese');
        $english = $request->input('english');
        $explanation = $request->input('explanation');
        $tip = $request->input('tip');

        $params = [
        'chapter_id' => $chapter,
        'unit' => $unit,
        'mission' => $mission,
        'japanese' => $japanese,
        'english' => $english,
        'explanation' => $explanation,
        'tip' => $tip,
        ];
        if (!$conversation->conversationSave($params)) {
        return redirect()->route('conversation.edit')->with('error_message', 'Regist failed');
        }

        return redirect()->route('conversation.show',$id)->with('flash_message', 'Regist success!!');
    }

    public function destroy($id)
    {
        $conversation = Conversation::find($id);
        if (!$conversation->delete()) {
        return redirect()->back()->with('error_message', 'Failed');
        }
        return redirect()->back()->with('flash_message', 'Deleted!!');
    }
}

@extends('layouts.app')

@section('content')
<style>
ul  {
  margin: 0;
}
ul .list  {
  font-size: 18px;
  padding-left: 0em;
  text-indent: -1em;
}
</style>
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
    <h1>{!! nl2br(e($chapter->chapter_id)) !!}<br>{!! nl2br(e($chapter->chapter_sub)) !!}する</h1>
    <p style="margin-bottom: 30px;">{!! nl2br(e($chapter->description)) !!}</p>
    
    <div style="background: rgba(0,0,0,0.1); border-radius: 1em; padding: 10px; margin-bottom: 15px;">
        <h2>{!! nl2br(e($chapter->chapter_sub)) !!}の構成要素</h2>
        <p> 英語での{!! nl2br(e($chapter->chapter_sub)) !!}を効果的に行うには、以下の要素を盛り込むとうまくいきます。</p>
        <ul>
            @foreach($some as $each)
            <li class="list">{!! nl2br(e($each->classification)) !!}：{!! nl2br(e($each->classification_sub)) !!}</li>
            @endforeach
        </ul>
    </div>

    <h2 style="margin-bottom: 15px; text-align: center; border-bottom: 2px solid #CCC ">キー表現<br>{!! nl2br(e($chapter->chapter_sub)) !!}の表現</h2>

    <div style="margin-bottom: 30px;">
        <div class="container">
        <h4>{{$some[0]['classification']}}</h4>
        <p>{{$some[0]['classification_des']}}</p>
        </div>
        @foreach($values[0] as $value)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">{!! nl2br(e($value['japanese'])) !!}</li>
            <li class="list-group-item">{!! nl2br(e($value['english'])) !!}</li>
            @if(Auth::user()->admin_flg)
            <li class="list-group-item" style="padding: 0px;">
            <div style="text-align:center;">
                <input style="float:left;" type="button" class="btn btn-outline-primary w-75" value="編集" onclick="location.href='/basic/{{$value['id']}}/edit'">
                <form name="delete_form" action="{{route('basic.destroy', $value['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" style="float:left;" class="btn btn-outline-danger w-25" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
            </div>
            </li>
            @endif
        </ul>
        @endforeach
    </div>
    @if(isset($values[1]))
    <div style="margin-bottom: 30px;">
        <div class="container">
            <h4>{{$some[1]['classification']}}</h4>
            <p>{{$some[1]['classification_des']}}</p>
        </div>

        @foreach($values[1] as $value)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">{!! nl2br(e($value['japanese'])) !!}</li>
            <li class="list-group-item">{!! nl2br(e($value['english'])) !!}</li>
            @if(Auth::user()->admin_flg)
            <li class="list-group-item" style="padding: 0px;">
            <div style="text-align:center;">
                <input style="float:left;" type="button" class="btn btn-outline-primary w-75" value="編集" onclick="location.href='/basic/{{$value['id']}}/edit'">
                <form name="delete_form" action="{{route('basic.destroy', $value['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" style="float:left;" class="btn btn-outline-danger w-25" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
            </div>
            </li>
            @endif
        </ul>
        @endforeach
    </div>
    @endif

    @if(isset($values[2]))
    <div style="margin-bottom: 30px;">
        <div class="container">
            <h4>{{$some[2]['classification']}}</h4>
            <p>{{$some[2]['classification_des']}}</p>
        </div>
        @foreach($values[2] as $value)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">{!! nl2br(e($value['japanese'])) !!}</li>
            <li class="list-group-item">{!! nl2br(e($value['english'])) !!}</li>
            @if(Auth::user()->admin_flg)
            <li class="list-group-item" style="padding: 0px;">
            <div style="text-align:center;">
                <input style="float:left;" type="button" class="btn btn-outline-primary w-75" value="編集" onclick="location.href='/basic/{{$value['id']}}/edit'">
                <form name="delete_form" action="{{route('basic.destroy', $value['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" style="float:left;" class="btn btn-outline-danger w-25" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
            </div>
            </li>
            @endif
        </ul>
        @endforeach
    </div>
    @endif

    @if(isset($values[3]))
    <div style="margin-bottom: 30px;">
        <div class="container">
            <h4>{{$some[3]['classification']}}</h4>
            <p>{{$some[3]['classification_des']}}</p>
        </div>
        @foreach($values[3] as $value)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">{!! nl2br(e($value['japanese'])) !!}</li>
            <li class="list-group-item">{!! nl2br(e($value['english'])) !!}</li>
            @if(Auth::user()->admin_flg)
            <li class="list-group-item" style="padding: 0px;">
            <div style="text-align:center;">
                <input style="float:left;" type="button" class="btn btn-outline-primary w-75" value="編集" onclick="location.href='/basic/{{$value['id']}}/edit'">
                <form name="delete_form" action="{{route('basic.destroy', $value['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" style="float:left;" class="btn btn-outline-danger w-25" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
            </div>
            </li>
            @endif
        </ul>
        @endforeach
    </div>
    @endif

    @if(isset($values[4]))
    <div style="margin-bottom: 30px;">
        <div class="container">
            <h4>{{$some[4]['classification']}}</h4>
            <p>{{$some[4]['classification_des']}}</p>
        </div>
        @foreach($values[4] as $value)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">{!! nl2br(e($value['japanese'])) !!}</li>
            <li class="list-group-item">{!! nl2br(e($value['english'])) !!}</li>
            @if(Auth::user()->admin_flg)
            <li class="list-group-item" style="padding: 0px;">
            <div style="text-align:center;">
                <input style="float:left;" type="button" class="btn btn-outline-primary w-75" value="編集" onclick="location.href='/basic/{{$value['id']}}/edit'">
                <form name="delete_form" action="{{route('basic.destroy', $value['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" style="float:left;" class="btn btn-outline-danger w-25" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
            </div>
            </li>
            @endif
        </ul>
        @endforeach
    </div>
    @endif
  </div>
</div>
</div>
@endsection
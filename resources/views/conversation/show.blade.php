@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
    <h1>{!! nl2br(e($unit->chapter_id)) !!}<br>{!! nl2br(e($unit->chapter->chapter_sub)) !!}する</h1>
  <h2 style="text-align: center;">{!! nl2br(e($unit->unit)) !!}</h2>
    <div style="background: rgba(255,0,0,0.1); border: 2px solid #CCC; padding: 3px 3px 0px 5px; margin-bottom: 45px;">
    <h2 style="border-bottom: 2px solid #CCC;">Mission</h2>
        <p>{!! nl2br(e($unit->mission)) !!}</p>
    </div>
    <div style="background: rgba(0,0,0,0.1); border: 2px solid #CCC; padding: 3px 3px 0px 5px; margin-bottom: 30px;">
    <h2 style="border-bottom: 2px solid #CCC;">Check</h2>
            <p>{!! nl2br(e($unit->chapter->check)) !!}</p>
    </div>

    <h2 style="text-align: center;">例文</h2>
    <div style="text-align: center; margin-bottom: 30px;">
        <audio class="col-md-8" controls controlslist="nodownload">
            <source src="{!! url('/mp3/'.$unit->chapter_id.'/'.$unit->unit.'.mp3')!!}">
        </audio>
    </div>
        <p class="list-group-item">{!! nl2br(e($unit->japanese)) !!}</p>
        <p class="list-group-item"style="margin-bottom: 45px;">{!! nl2br(e($unit->english)) !!}</p>
    
    <div style="background: rgba(0,0,0,0.1); border: 2px solid #CCC; padding: 10px 10px 0px 10px; border-radius: 1em; margin-bottom: 30px;">
        <h2 style="border-bottom: 2px solid #CCC;">解説</h2>
        <p>{!! nl2br(e($unit->explanation)) !!}</p>
    </div>
    @if($unit->tip == true)
    <div style="background: rgba(0,0,0,0.1); border: 2px solid #CCC; padding: 10px 10px 0px 10px; border-radius: 1em; margin-bottom: 30px;">
        <h2 style="border-bottom: 2px solid #CCC;">Tip</h2>
        <p>{!! nl2br(e($unit->tip)) !!}</p>
    </div>
    @endif
    @if(Auth::user()->admin_flg)
        <div style="text-align:center; margin-bottom:30px;">
            <a href="{{route('conversation.edit', $id=$unit->id)}}"><button type="button" class="btn btn-outline-primary btn-lg w-100">Edit</button></a>
        </div>
    @endif
    
    @if(!$prev==null)
    <div class="text-left" style="float: left;">
    <a href="{{route('conversation.show', $id=$prev->id)}}"><button type="button" class="btn btn-outline-secondary">Back</button></a>
    </div>
    @endif
    
    @if(!$next==null)
    <div class="text-right" style="float: right;">
    <a href="{{route('conversation.show', $id=$next->id)}}"><button type="button" class="btn btn-outline-secondary">Next</button></a>
    </div>
    @endif

    </div>
</div>
</div>
@endsection

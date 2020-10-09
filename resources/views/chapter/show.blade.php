@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
    
    <h3 style="text-align: center;">{{$chapter->chapter_id}}</h3>
    
    <h5 style="text-align: center; margin-bottom: 30px;">{{$chapter->chapter_sub}}</h5>

    <h4 style="text-align: center; margin:0;">Description</h4>
    <div style="background: rgba(255,255,255,0.1); border: 1px solid #CCC; padding: 10px 10px 0px 10px; border-radius: 1em; margin-bottom: 30px;">
        <p>{{$chapter->description}}</p>
    </div>
    <h4 style="text-align: center; margin:0;">Check</h4>
    <div style="background: rgba(255,255,255,0.1); border: 1px solid #CCC; padding: 10px 10px 0px 10px; border-radius: 1em; margin-bottom: 30px;">
        <p>{!! nl2br(e($chapter->check)) !!}</p>
    </div>

    <div style="margin-bottom: 10px; padding-bottom: 20px;">
      <a href="{{route('chapter.edit',$id=$chapter->chapter_id)}}"><button type="button" class="btn btn-outline-secondary btn-lg w-100">Edit Chapter</button></a>
    </div>

    <div style="margin-bottom: 30px; padding-bottom: 20px; ">
      <a href="{{route('conversation.create',$id=$chapter->chapter_id)}}"><button type="button" class="btn btn-outline-secondary btn-lg w-100">Create mission</button></a>
    </div>

    <h4 style="text-align: center;"><span style="background: linear-gradient(transparent 0%, rgba(0,0,0,0.3) 70%);">Constitution</span></h4>
        <div style="text-align:center; margin-bottom:20px; padding:0;">
        @foreach($chapter->classifications as $class)
            <a style="font-size: 1.3rem; " href="{{route('classification.show', $id=$class->id)}}">{!! nl2br(e($class->classification)) !!}</a><br>
        @endforeach
        </div>
        <a href="{{route('classification.create',$id=$chapter->chapter_id)}}"><button type="button" class="btn btn-outline-secondary btn-lg w-100">Add constitution</button></a>

  </div>
</div>
</div>

@endsection
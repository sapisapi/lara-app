@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
    @foreach($classifications as $class)
        <ul class="list-group" style="margin-bottom: 10px;">
            <li class="list-group-item">
                <a href="{{route('classification.show', $id=$class->chapter_id)}}">{{$class->chapter_id}}</a>
            </li>
        </ul>
    @endforeach
  </div>
</div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
      <div style="margin-bottom:30px;">
          <a href="{{route('chapter.create')}}"><button type="button" class="btn btn-outline-secondary btn-lg w-100">Create chapter</button></a>
      </div>
        @foreach($chapters as $cha)
            <div style="text-align:center; margin-bottom:20px">
                <h3>{{$cha->chapter_id}}</h3>
                <a style="font-size:1.3rem;" href="{{route('chapter.show', $id=$cha->chapter_id)}}">Detail</a><br>
            </div>
        @endforeach
  </div>
</div>
</div>



@endsection

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
        <div style="background: rgba(255,255,255,0.1); border: 1px solid #CCC; padding: 10px 10px 0px 10px; border-radius: 1em; margin-bottom: 30px;">
        <p style="text-align: center;">{{$classification->classification}}</p>

        <p style="text-align: center;">{{$classification->classification_sub}}</p>

        <p style="text-align: center;">{{$classification->classification_des}}</p>
        </div>
        <div style="margin-bottom:10px;">
          <a href="{{route('basic.create',$id=$classification->id)}}"><button style="margin-bottom:10px;" type="button" class="btn btn-outline-secondary btn-lg w-100">create basic sentence</button></a>
          <a href="{{route('classification.edit',$id=$classification->id)}}"><button style="margin-bottom:10px;" type="button" class="btn btn-outline-secondary btn-lg w-100">Edit classification</button></a>
          <form name="delete_form" action="{{route('classification.destroy', $id=$classification->id)}}" method="POST">
              @csrf
              @method('delete')
              <input type="submit" class="btn btn-outline-danger w-100" value="DELETE" onclick='return confirm("本当に削除してよろしいですか？");'>
          </form>
        </div>

  </div>
</div>
</div>
@endsection
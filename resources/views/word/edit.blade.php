@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <div class="card">
       <div class="card-header">{{ __('単語編集フォーム') }}</div>
       <div class="card-body">
         @if (count($errors) > 0)
         <div class="errors">
           <ul>
             @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
             @endforeach
           </ul>
         </div>
         @endif
         <form action="{{route('word.update', $word->id)}}" method="POST">
           @csrf
           @method('PUT')
           <div class="form-group">
             <label for="japanese">日本語</label>
             <textarea name="japanese" class="form-control">{{$word->japanese}}</textarea>
           </div>
           <div class="form-group">
             <label for="english">英語</label>
             <textarea name="english" class="form-control">{{$word->english}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
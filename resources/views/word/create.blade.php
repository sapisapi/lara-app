@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <div class="card">
       <div class="card-header">{{ __('投稿フォーム') }}</div>
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
         <form action="{{route('word.store')}}" method="POST">
           @csrf
           <div class="form-group">
             <label for="japanese">日本語</label>
             <textarea name="japanese" class="form-control">{{old('japanese')}}</textarea>

             <label for="english">英語</label>
             <textarea name="english" class="form-control">{{old('english')}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="投稿する">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
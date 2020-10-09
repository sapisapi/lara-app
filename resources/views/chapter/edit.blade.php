@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <div class="card">
       <div class="card-header">{{ __('POST FORM') }}</div>
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
         <form action="{{route('chapter.update',$id=$chapter->chapter_id)}}" method="POST">
           @csrf
           @method('PUT')
           
             <input type="hidden" name="chapter_id" class="form-control" value="{{$chapter->chapter_id}}"></input>
           <div class="form-group">
             <label for="chapter_sub">Chapter_sub</label>
             <input type="text" name="chapter_sub" class="form-control" value="{{$chapter->chapter_sub}}"></input>
           </div>
           <div class="form-group">
             <label for="description">Description</label>
             <textarea name="description" rows="4" class="form-control">{{$chapter->description}}</textarea>
           </div>
           <div class="form-group">
             <label for="check">Check</label>
             <textarea name="check" rows="4" class="form-control">{{$chapter->check}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
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
         <form action="{{route('chapter.store')}}" method="POST">
           @csrf
           <div class="form-group">
             <label for="chapter_id">Chapter</label>
             <input type="text" name="chapter_id" class="form-control">{{old('chapter_id')}}</input>
           </div>
           <div class="form-group">
             <label for="chapter_sub">Chapter_sub</label>
             <input type="text" name="chapter_sub" class="form-control">{{old('chapter_sub')}}</input>
           </div>
           <div class="form-group">
             <label for="description">Description</label>
             <textarea name="description" class="form-control">{{old('description')}}</textarea>
           </div>
           <div class="form-group">
             <label for="check">Check</label>
             <textarea name="check" class="form-control">{{old('check')}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
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
         <form action="{{route('conversation.store')}}" method="POST">
           @csrf
           
             <input type="hidden" name="chapter_id" class="form-control" value="{{$chapter->chapter_id}}">

             <div class="form-group">
             <label for="unit">unit</label>
             <input type="text" name="unit" class="form-control">{{old('unit')}}</input>
           </div>
           <div class="form-group">
             <label for="mission">mission</label>
             <textarea name="mission" class="form-control">{{old('mission')}}</textarea>
           </div>
           <div class="form-group">
             <label for="japanese">Japanese</label>
             <textarea name="japanese" class="form-control">{{old('japanese')}}</textarea>
           </div>
           <div class="form-group">
             <label for="english">English</label>
             <textarea name="english" class="form-control">{{old('english')}}</textarea>
           </div>
           <div class="form-group">
             <label for="explanation">explanation</label>
             <textarea name="explanation" class="form-control">{{old('explanation')}}</textarea>
           </div>
           <div class="form-group">
             <label for="tip">tip</label>
             <textarea name="tip" class="form-control">{{old('tip')}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
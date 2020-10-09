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
        
         <form action="{{route('basic.store')}}" method="POST">
           @csrf
          <input type="hidden" name="chapter_id" class="form-control" value="{{$one->chapter_id}}">
          <input type="hidden" name="classification" class="form-control" value="{{$one->classification}}">

           <div class="form-group">
             <label for="japanese">Japanese</label>
             <textarea name="japanese" class="form-control">{{old('japanese')}}</textarea>
           </div>
           <div class="form-group">
             <label for="english">English</label>
             <textarea name="english" class="form-control">{{old('english')}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
            @foreach($basics as $basic)
                {{$basic->english}}/
            @endforeach
   </div>
 </div>
</div>
@endsection
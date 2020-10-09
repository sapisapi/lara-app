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
         <form action="{{route('classification.update',$id=$classification->id)}}" method="POST">
           @csrf
           @method('PUT')
           <div class="form-group">
             <label for="classification">classification</label>
             <input type="text" name="classification" class="form-control" value="{{$classification->classification}}">{{old('constitution')}}</input>
           </div>
           <div class="form-group">
             <label for="classification_sub">classification_sub</label>
             <textarea name="classification_sub" class="form-control" >{{$classification->classification_sub}}</textarea>
           </div>
           <div class="form-group">
             <label for="classification_des">classification_des</label>
             <textarea name="classification_des" class="form-control">{{$classification->classification_des}}</textarea>
           </div>
           <input type="submit" class="btn btn-primary" value="POST">
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection
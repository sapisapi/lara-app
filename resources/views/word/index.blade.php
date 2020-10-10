@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">{{ __('単語') }}</div>
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
       <table class="table">
         <thead>
           <tr>
             <th>日</th>
             <th>英</th>
           </tr>
         </thead>
         <tbody>
           @foreach ($words as $word)
             <tr>
               <td>{!! nl2br(e($word->japanese)) !!}</td>
               <td>{!! nl2br(e($word->english)) !!}</td>
               <td><input type="button" class="btn btn-primary" value="編集" onclick="location.href='/word/{{ $word->id }}/edit'"></td>
               <td>
                <form name="delete_form" action="{{route('word.destroy', $word->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="削除" onclick='return confirm("本当に削除してよろしいですか？");'>
                </form>
                </td>
             </tr>
           @endforeach
         </tbody>
       </table>
     </div>
    </div>
  </div>
</div>
</div>
@endsection
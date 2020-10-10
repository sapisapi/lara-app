<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>

 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
 <div id="app">
   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
     <div class="container">
       <a class="navbar-brand" href="{{ url('/') }}">
           {{ config('app.name', 'english') }}
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <!-- Left Side Of Navbar -->
         <ul class="navbar-nav mr-auto">
         </ul>

         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
             <!-- Authentication Links -->
           @guest
             <li class="nav-item">
                 <a class="nav-link" href="{{route('user.signin')}}">{{ __('ログイン') }}</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{route('user.create')}}">{{ __('新規登録') }}</a>
             </li>
           @else
            <li class="nav-item">
               <a class="nav-link" href="{{route('word.index')}}">{{ __('単語') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('word.create')}}">{{ __('作成') }}</a>
            </li>

            <li class="nav-item">
                @if(Auth::user()->admin_flg)
                <a class="nav-link" href="{{route('chapter.index')}}">{{ __('CHAPTER') }}</a>
                @endif
            </li>

            <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               基本 <span class="caret"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               @foreach($data['apps_cha'] as $home_chapter)
                 <a class="dropdown-item" style="margin: 0px;"href="{{route('basic.show', $id=$home_chapter->chapter_id)}}">{{ __($home_chapter->chapter_id) }}</a>
               @endforeach
               </div>
             </li>

             <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               会話<span class="caret"></span>
             </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @foreach($data['apps_cha'] as $home_chapter)
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __($home_chapter->chapter_id) }}<span class="caret"></span>
                    </a>
                        @foreach($data['apps_con'] as $show)
                          @if($show->chapter_id==$home_chapter->chapter_id)
                            <a class="dropdown-item" style="margin: 0px;" href="{{route('conversation.show',$id=$show->id)}}">{{ __($show->unit) }}</a>
                          @endif
                        @endforeach
                    @endforeach
                  </div>
             </li>

             <li class="nav-item">
                @if(Auth::user()->admin_flg)
                <a class="nav-link" href="{{route('user.index')}}">{{ __('ユーザ一覧') }}</a>
                @endif
             </li>
             <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 アカウント <span class="caret"></span>
               </a>

               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{route('user.edit', ['user' => Auth::user()->id])}}">アカウント変更</a>
                 <a class="dropdown-item" href=""
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                   {{ __('ログアウト') }}
                 </a>

                 <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none;">
                   @csrf
                 </form>
               </div>
             </li>
           @endguest
         </ul>
       </div>
     </div>
   </nav>

   <!-- フラッシュメッセージ -->
   @if (Session::has('flash_message'))
    <div style="text-align:center;">
        <p class="bg-success">{!! Session::get('flash_message') !!}</p>
    </div>
   @endif

   @if (Session::has('error_message'))
    <div style="text-align:center;">
        <p class="bg-danger">{!! Session::get('error_message') !!}</p>
    </div>
   @endif

   <main class="py-4">
     @yield('content')
   </main>
 </div>
</body>
</html>
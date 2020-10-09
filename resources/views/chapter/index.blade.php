@extends('layouts.app')

@section('content')
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: 
}

.body2{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-attachment: fixed;
}

.container1{
    position: relative;
    width: 1150px;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.container1 .card1{
    position: relative;
    width: 300px;
    height: 420px;
    background: #fff;
    margin: 20px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,0.2);
    transition: 0.5s;
}

.container1:hover .card1{
    filter: blur(5px);
    transform: scale(0.9);
    opacity: 0.5;
}

.container1 .card1:hover{
    filter: blur(0px);
    transform: scale(1.1);
    opacity: 1;
}


.container1 .card1 .circle{
    position: relative;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.2);
    clip-path: circle(150px at center 0);
    text-align: center;
}

.container1 .card1 .circle h3{
    color: #fff;
    font-size:3.5em;
    padding: 30px 0;
}

.container1 .card1 .content1{
    position: absolute;
    bottom: 3px;
    padding: 10px;
    text-align: center;
}

.container1 .card1 .content1 p{
    color: #666;
}
.container1 .card1 .content1 a{
    position: relative;
    display: inline-block;
    padding: 0px 20px;
    background: rgba(0,0,0,0.2);
    color: #fff;
    border-radius: 40px;
    text-decoration: none;
    margin-top: 10px;
}

.container1 .card1:nth-child(1) .circle,
.container1 .card1:nth-child(1) .content1 a
{
    background: rgba(255,100,0,0.3);
}
.container1 .card1:nth-child(2) .circle,
.container1 .card1:nth-child(2) .content1 a
{
    background: rgba(0,100,255,0.3);
}
.container1 .card1:nth-child(3) .circle,
.container1 .card1:nth-child(3) .content1 a
{
    background: rgba(0,255,100,0.3);
}
.container1 .card1:nth-child(4) .circle,
.container1 .card1:nth-child(4) .content1 a
{
    background: rgba(100,255,0,0.3);
}
.container1 .card1:nth-child(5) .circle,
.container1 .card1:nth-child(5) .content1 a
{
    background: rgba(10,177,90,0.3);
}
.container1 .card1:nth-child(6) .circle,
.container1 .card1:nth-child(6) .content1 a
{
    background: rgba(150,255,100,0.3);
}
.container1 .card1:nth-child(7) .circle,
.container1 .card1:nth-child(7) .content1 a
{
    background: rgba(20,55,10,0.3);
}
.container1 .card1:nth-child(8) .circle,
.container1 .card1:nth-child(8) .content1 a
{
    background: rgba(40,200,100,0.3);
}
.container1 .card1:nth-child(9) .circle,
.container1 .card1:nth-child(9) .content1 a
{
    background: rgba(200,55,60,0.3);
}
.container1 .card1:nth-child(10) .circle,
.container1 .card1:nth-child(10) .content1 a
{
    background: rgba(200,55,10,0.3);
}
.container1 .card1:nth-child(11) .circle,
.container1 .card1:nth-child(11) .content1 a
{
    background: rgba(200,65,60,0.3);
}
.container1 .card1:nth-child(12) .circle,
.container1 .card1:nth-child(12) .content1 a
{
    background: rgba(20,55,60,0.3);
}
</style>

<div class="container">
<div class="row justify-content-center">
  <div class="col-md-12">
    <a href="{{route('chapter.create')}}"><button type="button" class="btn btn-outline-secondary btn-lg w-100">Create chapter</button></a>
  </div>
</div>
</div>
<div class="body2">
    <div class="container1">
    @foreach($chapters as $cha)
        <div class="card1">
            <div class="circle">
                <h3>{{$cha->chapter_id}}</h3>
            </div>
            <div class="content1">
                <h2>{{$cha->chapter_sub}}</h2>
                <p>{{$cha->description}}</p>
                <a style="font-size:1.3rem;" href="{{route('chapter.show', $id=$cha->chapter_id)}}">Detail</a><br>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection

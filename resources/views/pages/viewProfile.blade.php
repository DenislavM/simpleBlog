@extends('layouts.master')
@section('title','View Profile')

@section('content')
<div class="contentWrapper">
    <div class="profileView">
        <h1>Страницата на {{$profile[0]['username']}}</h1>
        <hr />
        <div class="personal_info">
            <h2>Лична информация</h2>
            <p id="info">Име:</p> {{$profile[0]['first_name']}} {{$profile[0]['last_name']}} <br />
            <p id="info">Град:</p> {{$profile[0]['city']}} <br />
            <p id="info">Пол:</p> {{$profile[0]['gender']}} <br />
            <p id="info">Възраст:</p> {{$profile[0]['age']}} <br />
            <p id="info">Професия:</p> {{$profile[0]['profession']}} <br />
            <hr />
        </div>
        <div class="posts">
            <h2>Постове</h2>
            <ul>
                @foreach ($articles as $article)
                    <li>
                        <div id="date">{{$article['created_at']}}</div>
                        <div id="topic"><a href="{{url('view/article/'.$article["id"])}}">{{$article['topic']}}</a></div>
                        <div id="text">{!!str_limit($article['text'],$limit = 200,$end='...')!!}</div>
                        <hr />
                    </li>
                @endforeach
            </ul>
            <div class="paginationWrapper">{!! $articles->render() !!}</div>
        </div>
    </div>
</div>
@endsection

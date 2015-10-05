@extends('layouts.master')
@section('title','Home')

@section('content')
<div class="contentWrapper">
    <div id="lastArticles">
        <h2>Нови постове</h2>
        @foreach($lastArticles as $articles)
            <div id="date">{{$articles->created_at}}</div>
            <div id="author">Автор:<a href="{{url('view/profile/'.$articles->user_id)}}">{{ucfirst($articles->username)}}</a></div>
            <div id="topic"><a href="{{url('view/article/'.$articles->id)}}">{{$articles->topic}}</a></div>
            <div>{!!$articles->text!!}</div>
            <hr />
        @endforeach
    </div>
   <aside class="asideRight"> 
        <div id="recentArticles">
            <h2>Последни постове</h2>
            @foreach($recentArticles as $articles)
                <div id="date">Създаден:{{$articles->created_at}}</div>
                <div id="author">Автор:<a href="{{url('view/profile/'.$articles->user_id)}}">{{ucfirst($articles->username)}}</a></div>
                <div id="topic"><a href="{{url('view/article/'.$articles->id)}}">{{$articles->topic}}</a></div>
                <div>{!!str_limit($articles->text,$limit = 50,$end='...')!!}</div>
                <hr />
            @endforeach
        </div>

        <div id="newMembers">
            <h2>Нови потребители</h2>
            @foreach($newMembers as $newMember)
                <div><a href="{{url('view/profile/'.$newMember->id)}}">{{$newMember->username}}</a></div>
            @endforeach
        </div>
   </aside>
</div>
@endsection


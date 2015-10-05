@extends('layouts.master')
@section('title','View Article')

@section('content')
<div class="contentWrapper">
    <div class="viewArticleWrapper">
        <h1>{{$topic}}</h1>
        <div>Автор: <a href="{{url('view/profile/'.$user_id)}}">{{$username}}</a></div>
        <div>Създаден: {{$created_at}}</div>
        <div>Категория:{{$categorie}}</div>
        <hr />
        <p>
            {!!$text!!}
        </p>
    </div>
</div>
@endsection

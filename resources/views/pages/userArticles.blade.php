@extends('layouts.master')
@section('title','My Articles')

@section('content')
<div class="contentWrapper">
    <div class="myArticlesWrapper">
        <h1>Моите постове</h1>
        <table>
            <tr>
                <th>Име</th>
                <th>Промени</th>
                <th>Изтрий</th>
            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td><a href="{{url('view/article/'.$article['id'])}}">{{$article['topic']}}</a></td>
                    <td><a href="{{url('edit/article/'.$article['id'])}}">Промени</a></td>
                    <td><a href="{{url('delete/article/'.$article['id'])}}">Изтрий</a></td>
                </tr>
            @endforeach
        </table>
        <div class="paginationWrapper">{!! $articles->render() !!}</div>
    </div>
</div>
@endsection

@extends('layouts.master')
@section('title','Login')

@section('content')
<div class="contentWrapper">
    @if (count($errors) > 0)
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="authWrapper">
        <form method="POST" action="login">
            {!! csrf_field() !!}
            <div>
                Имейл<span id="required">*</span>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Парола<span id="required">*</span>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <input type="checkbox" name="remember"> Запомни ме
            </div>

            <div>
                <button type="submit" id="submit">Влез</button>
            </div>
        </form>
    </div>
</div>
@endsection


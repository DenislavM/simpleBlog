@extends('layouts.master')
@section('title','Register')

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
    <div class="regWrapper">
        <form method="POST" action="register">
            {!! csrf_field() !!}
            <div>
                Потребителско име<span id="required">*</span>
                <input type="text" name="username" value="{{ old('username') }}">
            </div>

            <div>
                Имейл<span id="required">*</span>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Парола<span id="required">*</span>
                <input type="password" name="password">
            </div>

            <div>
                Потвърди парола<span id="required">*</span>
                <input type="password" name="password_confirmation" id="password_confirm">
            </div>

            <div>
                <button type="submit" id="submit">Регистрация</button>
            </div>
        </form>
    </div>
</div>
@endsection
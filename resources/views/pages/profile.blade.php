@extends('layouts.master')
@section('title','Edit Profile')

@section('content')
    <div class="contentWrapper">
        <div class="regWrapper" id="profileWrapper">
            <h2>Редактиране на профил</h2>
            <hr />
            <form method="POST" action="profile">
                {!! csrf_field() !!}
                <div>
                    Име
                    <input type="text" name="first_name" value="{{ $first_name }}">
                </div>

                <div>
                    Фамилия
                    <input type="text" name="last_name" value="{{ $last_name }}" id="last_name">
                </div>

                <div>
                    Град
                    <input type="text" name="city" value="{{ $city }}" id="city">
                </div>

                <div>
                    Пол
                    <input type="radio" name="gender" value="Мъж" <?php if($gender=='Мъж'){echo 'checked';}?>> Мъж
                    <input type="radio" name="gender" value="Жена" id="female" <?php if($gender=='Жена'){echo 'checked';}?>> Жена
                </div>

                <div>
                    Години
                    <input type="number" name="age" value="{{ $age }}" min="7" max="100">
                </div>

                <div>
                    Професия
                    <input type="text" name="profession" value="{{ $profession }}" id="profession">
                </div>

                <div>
                    <button type="submit" id="submit">Обнови</button>
                </div>
            </form>
        </div>
    </div>
@endsection
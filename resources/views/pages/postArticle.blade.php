@extends('layouts.master')
@section('title','Post Article')

   
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
    <div class="postArticleWrapper">
        <h2>Нов пост</h2>
        <hr />
        <form method="POST" >
            {!! csrf_field() !!}
            <div>
                Категория<span id="required">*</span>
                <select name="categorie" id="select">
                    <option value="Новини">Новини</option>
                    <option value="Забавление">Забавление</option>
                    <option value="Лайфстайл">Лайфстайл</option>
                    <option value="Бизнес">Бизнес</option>
                    <option value="Хоби">Хоби</option>
                    <option value="Технологии">Технологии</option>
                    <option value="Музика">Музика</option>
                    <option value="Спорт">Спорт</option>
                    <option value="Видео">Видео</option>
                    <option value="Изкуство">Изкуство</option>
                    <option value="Лични Дневници">Лични Дневници</option>
                    <option value="Политика">Политика</option>
                    <option value="Тя и Той">Тя и Той</option>
                    <option value="Регионални">Регионални</option>
                    <option value="Туризъм">Туризъм</option>
                    <option value="Поезия">Поезия</option>
                    <option value="История">История</option>
                    <option value="Рецепти">Рецепти</option>
                    <option value="Други">Други</option>
                </select>
            </div>
            
            <div>
                Тема<span id="required">*</span>
                <input type="text" name="topic">
            </div>
            
            <div>

                <textarea id="text" name="text" rows="7"></textarea>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.

                    CKEDITOR.replace( 'text',
                        {
                         customConfig : 'config.js',
                         toolbar : 'simple',
                         width : '95%',
                         height : '10%'
                        })
                </script>
            </div>

            <div>
                <button type="submit" id="submit">Публикувай!</button>
            </div>
        </form>
    </div>
</div>
@endsection

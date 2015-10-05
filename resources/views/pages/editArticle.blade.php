@extends('layouts.master')
@section('title','Post Article')

   
@section('content')
<div class="contentWrapper">
    <div class="postArticleWrapper">
        <h2>Редактиране на пост</h2>
        <hr />
        <form method="POST" >
            {!! csrf_field() !!}
            <div>
                Категория<span id="required">*</span>
                <select name="categorie" id="select">
                    <option value="Новини" <?php if($categorie=='Новини'){echo 'selected';}?>>Новини</option>
                    <option value="Забавление" <?php if($categorie=='Забавление'){echo 'selected';}?>>Забавление</option>
                    <option value="Лайфстайл" <?php if($categorie=='Лайфстайл'){echo 'selected';}?>>Лайфстайл</option>
                    <option value="Бизнес" <?php if($categorie=='Бизнес'){echo 'selected';}?>>Бизнес</option>
                    <option value="Хоби" <?php if($categorie=='Хоби'){echo 'selected';}?>>Хоби</option>
                    <option value="Технологии" <?php if($categorie=='Технологии'){echo 'selected';}?>>Технологии</option>
                    <option value="Музика" <?php if($categorie=='Музика'){echo 'selected';}?>>Музика</option>
                    <option value="Спорт" <?php if($categorie=='Спорт'){echo 'selected';}?>>Спорт</option>
                    <option value="Видео" <?php if($categorie=='Видео'){echo 'selected';}?>>Видео</option>
                    <option value="Изкуство" <?php if($categorie=='Изкуство'){echo 'selected';}?>>Изкуство</option>
                    <option value="Лични Дневници" <?php if($categorie=='Лични Дневници'){echo 'selected';}?>>Лични Дневници</option>
                    <option value="Политика" <?php if($categorie=='Политика'){echo 'selected';}?>>Политика</option>
                    <option value="Тя и Той" <?php if($categorie=='Тя и Той'){echo 'selected';}?>>Тя и Той</option>
                    <option value="Регионални" <?php if($categorie=='Регионални'){echo 'selected';}?>>Регионални</option>
                    <option value="Туризъм" <?php if($categorie=='Туризъм'){echo 'selected';}?>>Туризъм</option>
                    <option value="Поезия" <?php if($categorie=='Поезия'){echo 'selected';}?>>Поезия</option>
                    <option value="История" <?php if($categorie=='История'){echo 'selected';}?>>История</option>
                    <option value="Рецепти" <?php if($categorie=='Рецепти'){echo 'selected';}?>>Рецепти</option>
                    <option value="Други" <?php if($categorie=='Други'){echo 'selected';}?>>Други</option>
                </select>
            </div>
            
            <div>
                Тема<span id="required">*</span>
                <input type="text" name="topic" value="{{$topic}}">
            </div>
            
            <div>

                <textarea id="text" name="text" rows="7">{{$text}}</textarea>
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

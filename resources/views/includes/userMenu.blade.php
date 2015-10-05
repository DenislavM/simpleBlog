@if(Auth::check())
    <div class="userMenuWrapper">
        <nav>
            <h3>Потребителско Меню</h3>
            <hr />
            <ul>
                <li><a href="{{url('new/article')}}">Добавяне на пост</a></li>
                <li><a href="{{url('myArticles')}}">Моите постове</a></li>
                <li><a href="{{url('edit/profile')}}">Редактиране на профил</a></li>
            </ul>
        </nav>
    </div>
@endif
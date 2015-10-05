<div class="headerWrap">
    <div id="logo">simpleBlog</div>
    <nav id="mainMenu">
        <ul>
            <li><a href="{{url()}}">Начало</a></li>
            @if(Auth::check())
                <li><a href="{{url('view/profile/')}}">Профил</a></li>
                <li><a href="{{url('logout')}}">Излез</a></li>
            @else
                <li><a href="{{url('login')}}">Влез</a></li>
                <li><a href="{{url('register')}}">Регистрация</a></li>
            @endif
        </ul>
    </nav>
</div>

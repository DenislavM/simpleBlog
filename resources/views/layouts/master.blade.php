<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="{{asset("css/styles.css")}}"/>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{asset("js/plugins/ckeditor/ckeditor.js")}}"></script>
        
        <title>
            @yield('title')
        </title>
    </head>
    <body>
        <div class="wrapper">
            <header>
                @include('includes.header')
            </header>
            <aside>
                @include('includes.userMenu')
            </aside>
            <section>
                @yield('content')
            </section>
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>
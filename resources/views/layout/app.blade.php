<html>
    <head>
        <title>Cadastro de Produtos</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @component('navbar', ["current" => $current])
            @endcomponent
                <main role="main">
                    @hasSection ('body')
                        @yield('body')
                    @endif
                </main>
        </div>

    <script src="{{ asset("js/app.js") }}" type="text/javascript"></script>    
    </body>
</html>
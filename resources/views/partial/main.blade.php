<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DMW++</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-5.9.0/css/all.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        @yield('content')

        <div class="notification is-danger main-notification">
            <button class="delete"></button>
            <div class="content">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $messages)
                            <li>
                                {{ $messages }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <script src="{{ asset('js/script.js') }}"></script>
        <script>
            @if ($errors->any())
                danger();
            @endif
        </script>
    </body>
</html>

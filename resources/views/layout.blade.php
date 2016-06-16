<!DOCTYPE html>
<html>
    <head>
        <title>Interview Task - Oscar Berry</title>

        <style>
            body {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{{ $error }}}</p>
            @endforeach
        @endif

        @yield('body')
    </body>
</html>

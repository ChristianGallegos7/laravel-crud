<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ( $message = Session::get('success') )
        <div>
            {{$message}}
        </div>
    @endif
    @if ( $message = Session::get('danger') )
        <div>
            {{$message}}
        </div>
    @endif
    @yield('content')
</body>
</html>
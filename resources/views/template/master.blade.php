<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
</head>
<body>
    <nav>
        <a href="{{route('post.create')}}">我要發文</a>
    </nav>
    @yield('main')
</body>
</html>
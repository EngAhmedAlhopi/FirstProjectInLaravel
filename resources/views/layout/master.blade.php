<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'Unknown Page')</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    @yield('concate' , 'unknown concate')

    <h1>
        @yield('name','Unknown name')
    </h1>
</body>
</html>

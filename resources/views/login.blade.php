<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
<div class="container">
    <form action="{{route('loginStore')}}" method="post">
        @csrf
        <h1>login</h1>
        <input type="email" name="email" placeholder="Email ....">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>




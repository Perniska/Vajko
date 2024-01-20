<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(session('uzivatel_id'))
    <!-- User is authenticated -->
    <p>Welcome, {{ $uzivatel->meno }}!</p>
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <!-- User is not authenticated -->
    <form method="post" action="{{ route('login') }}">
        @csrf
        <!-- Your login form here -->
    </form>
@endif

</body>
</html>

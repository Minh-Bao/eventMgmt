<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>EventBrote</title>
    <style>
        body{
            margin-top: 80px;
        }

    </style>
</head>
<body>
    @include('layouts.partials._nav')
    <div class="container">
        @if (session()->has('notification.message'))
            <div class="alert alert-{{ session('notification.type') }}">
                {{ session()->get('notification.message') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
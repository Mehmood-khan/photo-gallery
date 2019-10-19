<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Photo Gallery</title>
    <style>
        .spacing{
            /* margin:10px;
            padding:10px; */
            margin-top:5px;
        }
    </style>
</head>
<body>
        {{-- @include('inc.navbar') --}}
        @include('inc.navbar')
    <div class="container">
        
        @include('inc.messages')
        @yield('content')
    </div>
    
</body>
</html>
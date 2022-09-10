<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/custome.css')}}">
</head>
<body>
    
@include('layout.menue')

@yield('content')

@include('layout.footer')


<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/popper.min')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>     
<script src="{{asset('js/custome.js')}}"></script>

</body>
</html>
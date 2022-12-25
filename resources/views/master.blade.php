<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce pro</title>
    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- Bootstrap CDN CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
    {{-- Bootstap CDN Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>
    {{-- STYLE CSS LINK --}}
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    

   <style>
        .custom-login{
            height: 70vh;
        }
        .display-property{
            display: flex;
            justify-content: center;
            align-items: center;
        }
   </style>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ config('app.locale')}} ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
         <link rel="stylesheet" href="{{asset('css/index.css')}}">

        <title>{{config('app.name','LSAPP')}}</title>

        
        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container m-5">
        @yield('content')
        </div>
   

    
    </body>
</html>

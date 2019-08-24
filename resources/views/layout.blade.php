<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> @yield('title','Home Page')</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>

<body>

       @include('include.nav' ,['username'=>'user_123'])

<div class="container " style="height:500px">
                @yield('content') 
        </div>
    
 <div class="footer bg-info" style="height:100px; width:100%">
 </div>
    </body> 
    <script src="{{ asset("js/app.js") }}"></script>
    </html>
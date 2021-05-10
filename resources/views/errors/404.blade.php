<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <title>Server Error: 404 (Not Found)</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style type="text/css">
        * {
          -webkit-box-sizing: border-box;
                  box-sizing: border-box;
        }
        body {
          padding: 0;
          margin: 0;
        }
    </style>

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>404</h1>
                <h2>Page not found</h2>
            </div>
            <a href="{{{ URL::to('/') }}}">Homepage</a>
        </div>
    </div>



</body>
</html>

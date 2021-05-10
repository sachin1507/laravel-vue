<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Home - Clause Matics</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="lib/css/owl.carousel.min.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="app">
       <app></app>
    </div>    
    <script src="{{ mix('js/bootstrap.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <script src="lib/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="lib/js/owl.carousel.min.js"></script> -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>
</html>
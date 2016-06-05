<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/src/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/src/js/bootstrap.min.js"></script>




    @yield('header')

</head>
<body>
<div class="container">
    <div class="content">

        @yield('content')

        @yield('footer')
    </div>
</div>
</body>
</html>

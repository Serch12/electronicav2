<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('assets/images/favicon/20.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/20.png')}}" type="image/x-icon">
    <title>Eléctrica Vazquez</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
     <!-- Bootstrap css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css')}}">
    

</head>

<body class="theme-color-23">
    <!-- header end -->
    @include('Frontend.header')
    <div id="app">
       
        <app></app>
    </div>
    @include('Frontend.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- fly cart ui jquery-->
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
    
    <!-- exitintent jquery-->
    <script src="{{ asset('assets/js/jquery.exitintent.js')}}"></script>
    <script src="{{ asset('assets/js/exit.js')}}"></script>

    <!-- slick js-->
    <script src="{{ asset('assets/js/slick.js')}}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js')}}"></script>

    <!-- menu js-->
    <script src="{{ asset('assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/js/feather.min.js')}}"></script>

    <!-- Timer js-->
    <script src="{{ asset('assets/js/timer.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('assets/js/bootstrap-notify.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/js/theme-setting.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/js/custom-slick-animated.js')}}"></script>


    <script>
        // $(window).on('load', function () {
        //     setTimeout(function () {
        //         $('#exampleModal').modal('show');
        //     }, 2500);
        // });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>

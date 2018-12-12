<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CCC@Kitchen</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!-- =======================================================
      Theme Name: Gp
      Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>


    <body>
    <div>
        @include('layouts.header')

        <main class="container-fluid" style="height:72vh;margin-top: 10%;">
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>
    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</html>

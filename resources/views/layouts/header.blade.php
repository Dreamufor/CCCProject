<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CCC@Kitchen</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    {{--<li><a href="about-us.html">About Us</a></li>--}}
                    {{--<li><a href="services.html">Services</a></li>--}}
                    {{--<li><a href="portfolio.html">Portfolio</a></li>--}}
                    {{--<li><a href="blog.html">Blog</a></li>--}}
                    {{--<li><a href="contact-us.html">Contact</a></li>--}}
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('admin/staff') }}">Staff</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>
<!--/header-->



















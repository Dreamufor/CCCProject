<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="index.html"><h1>CCC@Kitchen</h1></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <div class="menu">
                    <ul class="nav nav-tabs" role="tablist" style="font-size: 16px;">
                        <li role="presentation"><a href="index.html" class="active">Home</a></li>
                        <li role="presentation"><a href="about.html">About Us</a></li>
                        <li role="presentation"><a href="services.html">Services</a></li>
                        <li role="presentation"><a href="gallery.html">Gallery</a></li>
                        <li role="presentation"><a href="contact.html">Contact</a></li>
                        <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
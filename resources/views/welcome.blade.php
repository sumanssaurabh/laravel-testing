<!DOCTYPE HTML>
<!--
 Hielo by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Hielo by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="index.html">Hielo <span>by TEMPLATED</span></a></div>
        <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                    @endif
                @endif

                @endif
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
    </nav>

        <!-- Banner -->
        <section class="banner full">
            <article>
                <img src="images/slide01.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
                        <h2>Hielo</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/slide02.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>Lorem ipsum dolor sit amet nullam feugiat</p>
                        <h2>Magna etiam</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/slide03.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
                        <h2>Tempus dolor</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/slide04.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
                        <h2>Etiam feugiat</h2>
                    </header>
                </div>
            </article>
            <article>
                <img src="images/slide05.jpg" alt="" />
                <div class="inner">
                    <header>
                        <p>Ipsum dolor sed magna veroeros lorem ipsum</p>
                        <h2>Lorem adipiscing</h2>
                    </header>
                </div>
            </article>
        </section>


        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </div>
            <div class="copyright">
                &copy; Untitled. All rights reserved.
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

    </html>

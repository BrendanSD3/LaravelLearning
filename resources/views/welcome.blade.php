<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff;*/
                background-image: url("images/Background.jpg");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .link:hover{
                opacity:0.5;

            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="link" href="{{ url('Admin/home') }}">Dashboard</a>
                    @else
                        <a class="link" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="color:white;">
                    Laravel
                </div>

                <div class="links" style="background-color:white; border:1px solid black;">
               
                @auth
                    <a class="link" href="/board">View Task Board</a>
                    <a class="link" href="/blogs">View Latest Blogs </a>
                @endauth
                @guest
                    <a class="link" href="/blogs">View Latest Blogs </a>
               @endguest                 
                </div>
                    <!-- adding comment for dev and test branch -->
         



            </div>
        </div>
    </body>
</html>

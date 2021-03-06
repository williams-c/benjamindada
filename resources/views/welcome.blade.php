<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Benjamin Dada</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                 <img src="http://res.cloudinary.com/dgpjdyg8p/image/upload/v1442273666/professional_pmcttp.jpg" alt="BD" class="img-responsive img-circle center-block">

                <div class="title m-b-md">
                    Vote <strong>Benjamin Dada</strong>&nbsp;As<br>
                    VP Education 
                </div>

                <div class="links">
                    <a href="http://lusu.co.uk/the-students-union-is-yours-to-change/elections/vote-fest-full-time-officer-candidates/benjamin-dada">Manifesto</a>
                    <a href="https://www.facebook.com/Ben4VPE/">FB Campaign Page</a>
                    <a href="https://twitter.com/DadaBen_">Twitter Profile</a>
                    <a href="https://medium.com/benjamin-dada/tagged/education">Articles on Education</a>
                    <a href="http://www.benjamindada.com/">Personal Website</a>
                </div>
            </div>
        </div>
    </body>
</html>

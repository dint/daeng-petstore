<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
            .content { padding-top: 3em; }
            #navbar-1 { padding-right: 1em; }
        </style>
        <title>Daeng PetStore&#0153;</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('layouts.navbar')

                    <div class="col-lg-12 content">
                        @if (Session::has('message'))
                            <div class="flash alert">
                                <p>{{ Session::get('message') }}</p>
                            </div>
                        @endif

                        @yield('main')
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
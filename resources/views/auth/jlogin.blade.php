<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('jboximage/favicon.ico')}}" />
        <link rel="icon" type="image/png" href="{{ asset('jboximage/favicon-32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('jboximage/favicon-16x16.png')}}" sizes="16x16" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'JBOXCOIN') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('jboximage/favicon.ico')}}" />
        <link rel="icon" type="image/png" href="{{ asset('jboximage/favicon-32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('jboximage/favicon-16x16.png')}}" sizes="16x16" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/mycustom.css')}}" />
    </head>
    <body>
    <div id="c" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <br><br>
                    <h1 class="jbx-g alf">WELCOME TO JBOX</h1>
                    <p" style="font-size:20px" class="jbx-g alf">Decentralized video streaming platform.</p>
                    <br>
                </div>
                <div class="col-md-1"></div>
                <div class="card pdd mbb col-md-6" style=" margin-top: 170px">
                    <br>
                    <h4 class="mbb jbx-gr">Create a new account</h4>
                    <form method="post" action="{{route('register')}}" class="form-group">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="First name" class="form-control jbx-grbg mb" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" placeholder="Last name" class="form-control jbx-grbg mb" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="username" placeholder="Username" class="form-control jbx-grbg mb" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email" class="form-control jbx-grbg mb" />
                            </div>
                                <div class="col-md-6">
                        <input type="hidden" value="" name="refer_by" class="form-control jbx-grbg mb" />
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="password" name="password" placeholder="Password" class="form-control jbx-grbg mb" />
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control jbx-grbg mb" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" name="regbtn"  class="btn btn-warning mb" >Sign Up</button>
                            </div>
                        </div>
                        <div>
                            <span class="jbx-gr">Already have a JBOX Account? </span>
                            <a href="login" class="jbx-gr ml">log in</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

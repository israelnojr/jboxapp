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
        <div id="l" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="mt mbb col-md-6">
                        <br><br><br><br>
                        <div class="card pdd">
                            <h3 class="mbb jbx-gr">{{ __('User login')}}</h3>
                            <form method="post" class="form-group" action="{{ route('login')}}">
                                @csrf
                                <label class="jbx-gr">{{ __('Email')}}</label>
                                <input type="text" name="email" placeholder="Email" class="form-control form-control-lg jbx-grbg mb" />
                                <!-- <label class="jbx-gr">{{ __('Username')}}</label>
                                <input type="text" name="username" placeholder="Username" class="form-control form-control-lg jbx-grbg mb" /> -->
                                <label class="jbx-gr">{{ __('Password')}}</label>
                                <input type="password" name="password" placeholder="Password" class="form-control form-control-lg jbx-grbg mb" />
                                <div style="text-align:right" class="jbx-gr">
                                <a href="recover-password" class="jbx-gr ml">Forgot Password ?</a> </div>
                                <button type="submit"  class="btn btn-warning btn-lg mb">Log in </button>
                                
                                <div><span class="jbx-gr">New to Jbox ? </span>
                                    <a href="{{ route('register')}}" class="jbx-gr ml">Sign up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

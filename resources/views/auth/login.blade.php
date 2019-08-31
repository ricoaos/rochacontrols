<!doctype html>

<html>
<head>
    <title>SISGERMA | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('vendor/vendor/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/vendor/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('vendor/vendor/css/font-awesome.css') }}" rel="stylesheet" /> 
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href="{{ asset('vendor/vendor/css/icon-font.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/vendor/js/jquery-1.10.2.min.js') }}"></script>
</head>

<body>
    <div class="error_page">						
        <div class="error-top">
            <h2 class="inner-tittle page">SISGERMA</h2>
            <div class="login">
                <img id="logo" width="50%" src="{{ asset('vendor/vendor/rcControls.png') }}"><br>
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                            
                        <input id="text" type="text" class="text" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Password"  name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="submit"><input type="submit" value="Login" ></div>
                    <div class="clearfix"></div>
                    
                    <div class="new">
                        <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Esqueceu a senha?</label></p>
                        <p class="sign">Não possui uma conta? <a href="sign.html">Registrar</a></p>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<div class="footer"></div>
	<script src="{{ asset('vendor/vendor/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('vendor/vendor/js/scripts.js') }}"></script>
    <script src="{{ asset('vendor/vendor/js/bootstrap.min.js') }}"></script>

</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
    <title>{{__('pages.login')}} - {{ config('app.name')}}</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
    <style>
        @media (min-width: 501px) {
            .login-block {
                width: 380px;
                padding: 20px;
                margin: 60px auto;
                background: #fff;
            }
        }

        @media (max-width: 500px) {
        .login-block {
            width: 100%;
            margin: 60px auto;
                background: #fff;
            }
            .col-md-offset-1 {
                margin-right: 20px;
                margin-left: 20px;
            }
        }

        .login-block-header {
            padding-bottom: 5px;
            margin-bottom: 30px;
            border-bottom: solid 1px #eee;
        }

        .login-body {
            background-image: url("../res/login_wallpaper.jpg");
            background-size: cover;
        }

        .button {
            background-color: #7C8FC8;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border: 0;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            font-weight: 400;
            margin-bottom: 20px;
            padding: 6px 13px;
            position: relative;
            white-space: nowrap;
            width: 100%;
        }

        .center-block {
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .input-group {
            position: relative;
            display: table;
            margin-left: 20px;
            margin-right: 20px;
            border-collapse: separate;
        }

        .input-group-addon, .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;
        }
    </style>
    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class='login-body'>
    <div class="container" align="center">
        <div class="login-block">
            <div class="login-block-header">
                <img class="center-block" src="res/Logo.png">
            </div>
            <div class="input-group " style="margin-bottom: 20px;">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="tbx-user" type="text" class="form-control" placeholder="{{ __('login.username') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input id="tbx-pwd" type="password" class="form-control" placeholder="{{ __('login.password') }}" onkeypress="keyPressed(event);">    
            </div>
            <hr>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!--mock redirect to index-->
                    <a href="{{ URL::to('/') }}">
                        <button id="btn-login" type="submit" class="button">{{ __('login.login') }}</button>
                    </a>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <a href="{{ URL::to('login/create-email') }}">
                        <button class="button">{{ __('login.register') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script src="js/firebase-config.js"></script>
<script type="text/javascript">
    $('#btn-login').click(function(e){
        e.preventDefault();
        handleSignUp();
    });

    function keyPressed(e){
        if(e.keyCode === 13) handleSignUp();
    }

    function handleSignUp(){
        /*
        let email = document.getElementById('tbx-user').value;
        let password = document.getElementById('tbx-pwd').value;
        let warnings = "";

        if (email.length < 4) {
            warnings += 'You need a valid email \n';
        }
        if (password.length < 4) {
            warnings += 'You need a valid password';
        }

        if (warnings != "") {
            alert(warnings);
        } else {
            firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
                alert("error");
                console.log(error);
            });
        }
        */
    }

    function firebase.auth().onAuthStateChanged(user => {
        if(user){
            console.log("logged in as "+user.email);
        }
    });
</script>
</html>
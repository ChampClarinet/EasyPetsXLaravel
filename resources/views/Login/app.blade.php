<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{config('app.name')}} - {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      .login-body {
        background-image: url("res/login_wallpaper.jpg");
        background-size: cover;
      }
    </style>
  </head>
  <body class="login-body">
    <div class="content-wrapper">
      <div class="container-fluid">
        @yield('content')
      </div>
      <!-- @include("layouts.Footers.footer") -->
      <!-- @include("layouts.Partials.Modals.modal") -->
    </div>
  </body>
  <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
  <script src="js/firebase-config.js"></script>
  <script type="text/javascript">

      document.getElementById("btn-login").onclick = function(e) {
          e.preventDefault();
          handleSignUp();
      };

      function keyPressed(e) {
          if (e.keyCode === 13) {
              handleSignUp();
          }
      }

      function handleSignUp() {
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
      }

      firebase.auth().onAuthStateChanged(user => {
          if (user) {
              console.log("logged in as "+user.email);
              loadService(user.uid);
          }
      });

      function loadService(uid) {
          let data = {uid: uid};
          $.post('core/serviceLoaderMain.php', data,
              function (data, status) {
              console.log(data);
                  if(status === 'success') {
                      window.location.href = 'index.php';
                  }
                  else alert('error: '+data);
              }
          );
      }

  </script>
  <script>
    var config = {
      apiKey: "AIzaSyAo6ldqjYdKnFO9bSKLJw8bxyqoz_NVFZE",
      authDomain: "easypetsthailand.firebaseapp.com",
      databaseURL: "https://easypetsthailand.firebaseio.com",
      projectId: "easypetsthailand",
      storageBucket: "easypetsthailand.appspot.com",
      messagingSenderId: "223124031755"
    };
    firebase.initializeApp(config);
  </script>
</html>

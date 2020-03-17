<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <!-- Bootstrap core CSS -->
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!--google icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ url('/css/index.css') }}">

    <!--JavaScript-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script src="{{ url('js/index.js') }}"></script>
  </head>
  <body onload="index()">
    <div class="container">
      <form class="form-signin" action="http://localhost:8005/login" method="POST">
        <img src="imgs/LOGO4.png" style="width:300px;">
        <h2 class="form-signin-heading">Please sign in</h2>
        <!-- screen reader only -->
        <!--label for="Account" class="sr-only">Account</label-->
        <!--label for="Password" class="sr-only" >Password</label-->
        <div class="form-div">
          <i class="material-icons">person</i>
          <input type="text" class="form-control form-singin-input" id="account" name="account"  placeholder="Account" required autofocus>
        </div>
        <div class="form-div">
          <i class="material-icons">vpn_key</i>
          <input type="password" class="form-control form-singin-input" id="password" name="password"  placeholder="Password" required>
        </div>
        <div class="form-div">
          <input type="checkbox" class="checkbox" id="show_password">顯示密碼</br>
        </div>
        <div class="form-div">
          <input type="submit" class="btn btn-lg btn-primary btn-block " value="Log in" ></input>
          <input type="button" class="btn btn-lg btn-primary btn-block " value="Sign up" onclick=" window.location = 'http://localhost:8004/signup'"></input>
        </div>
      <!--div class="btn btn-lg btn-primary btn-block" onclick="document.getElementById('signup-pop').style.display='block'" >Sign up</div-->
      </form>
    </div> <!-- /container -->

  </body>
</html>

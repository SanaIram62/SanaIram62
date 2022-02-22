
<?php
    $error="";
  if(array_key_exists("submit",$_POST)) {

    if(!$_POST['email']) {
      $error .= "Email is missing<br>";
      echo $error;

    }
    if
    (!$_POST['password']) {
    $error .= "password is missing<br>";
      echo $error;

    }
    if($error!="")
    {
      $error = "<p> there is some error</p>";
    }
    else{
      echo "signning in...";
    }


  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Secret Diary</title>
    <style type="text/css">
      .container {
        text-align: center;
        width: 400px;
        margin-top: 200px;

      }
      html {

          background: url(background.jpg) no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;

        }


          body {
            background: none;
            color: #333;
          }
          #logInForm {
            display: none;
          }
          .form-control {
            margin-bottom: 20px;
          }



      </style>
  </head>
  <body>
    <div class="container">



    <h1>My Secret Diary</h1>
    <form method="post" id="signInForm">
      <fieldset class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email">
      </fieldset>
      <fieldset class="form-group">
        <input class="form-control" type="password" name="password" placeholder="password">
      </fieldset>
      <fieldset class="form-group">
          <input type="checkbox" name="staylogged" value=1>Stay Logged In<br></input>
          <input type="hidden" name="SignUp" value="1">
      </fieldset>
      <fieldset class="form-group">
          <input class="btn btn-success" type="submit"  name="submit" value="signup">
      </fieldset>
      <p><a id="showLogInForm">Log in</a></p>
      </form>
        <form method="post" id="logInForm">
        <fieldset class="form-group">
          <input class="form-control" type="email" name="email" placeholder="Email">
        </fieldset>
        <fieldset class="form-group">
          <input class="form-control" type="password" name="password" placeholder="password">
        </fieldset>
        <fieldset class="form-group">
          <input type="checkbox" name="staylogged" value="1">Stay Logged In<br></input>
          <input type="hidden" name="SignUp" value=0>
          <input class="btn btn-success" type="submit" name="submit" value="login">
        </fieldset>

          <p><a id="showSignInForm">Sign Up</a></p>
    </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
      $("#showLogInForm").click(function() {
        $("#signInForm").toggle();
        $("#logInForm").toggle();

      });
      $("#showSignInForm").click(function() {
        $("#logInForm").toggle();
        $("#signInForm").toggle();

      });
    </script>
  </body>
</html>

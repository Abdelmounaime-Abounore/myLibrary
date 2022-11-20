<?php
session_start();
if (isset($_SESSION['admin'])) unset($_SESSION['admin']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />


</head>
<body>
  <!-- Section: Design Block -->
<section class="bg_login overflow-hidden">
  <style>
    .bg_login {
      background-image: url(./img/bg_biblio.png);
      height: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
  

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        Log in to your library<br />
        </h1>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div class="card">
          <style>
            .card {
              border-radius: 15px;
            }
          </style>
          <div class="card-body px-4 py-5 px-md-5">

            <form  method="post" action="classes/traitement.php" name="form">
              <!-- User name input -->
              <div class="form-outline mb-4">
                <label>E-mail</label>
                <input type="email" id="email" class="form-control" name="email"/>
                <div id="email_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>
               
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label>Password</label>
                <input type="password" id="pass_word" class="form-control" name="pass_word"/>
                <div id="password_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>

              <!-- Submit button -->
              <div class="d-flex justify-content-between">
                <input type="hidden" name="action" value="login">
                <button type="submit" class="btn btn-info text-light btn-block p-2" onclick="validated(event)">
                Login
                </button>
                <a style="text-decoration: none;" href="signup.php">Sign Up</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->


  <script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="script.js"></script>


</body>
</html>
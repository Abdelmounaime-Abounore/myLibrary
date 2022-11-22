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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  
</head>




<body>
  <!-- Section: Design Block -->
<section class="bg_login">

  <div class="container px-5 text-center text-lg-start h-100">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mt-5">
        <h1 class="my-5 fw-bold" style="color: hsl(218, 81%, 95%); font-family: 'Oswald Bold', bold, sans-serif"; >
        Log in to your Library<br />
        </h1>
      </div>

      <div class="col-lg-6  mt-5 position-relative">
        <div class="card">
          <div class="card-body px-4 py-5 px-md-5 h-100">

            <form  method="post" action="classes/traitement.php" name="form">
              <!-- User name input -->
              <div class="mb-4">
                <label>E-mail</label>
                <input type="email" id="email" class="form-control" name="email"/>
                <div id="email_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>
               
              <!-- Password input -->
              <div class="mb-4">
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
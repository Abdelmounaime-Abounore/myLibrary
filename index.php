

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
        Welcome to your Library <br />
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
            <form  method="POST" action="dashboard.php">
              <!-- User name input -->
              <div class="form-outline mb-4">
                <input type="text" id="usrname" class="form-control" name="admin" required/>
                <label class="form-label">User name</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control" name="pass" required/>
                <label class="form-label">Password</label>
              </div>
              <!-- Submit button -->
              <button type="submit" class="btn btn-info btn-block mb-4" name="login">
                Log in
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  <body>
     <!-- Section: Design Block -->
<section class="bg_login" style="font-family: Calibri;">

  <div class="container px-5 text-center text-lg-start">
    <div class="row align-items-center mb-5 pt-5">
      <div class="col-lg-6 mt-5">
        <h1 class="my-5 fw-bold" style="color: hsl(218, 81%, 95%); font-family: 'Oswald Bold', sans-serif"">
        Sign Up as Admin<br />
        </h1>
      </div>

      <div class="col-lg-6 position-relative">
        <div class="card">          
          <div class="card-body px-4 px-md-5">

            <form  method="POST" action="classes/traitement.php" name="form">
              <!-- User name input -->
              <div class="form-outline mb-4">
                <label>Name</label>
                <input type="text" id="admin_name" class="form-control p-1" name="name"/>
                <div id="admin_name_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>
              
              <div class="form-outline mb-4">
                <label>E-mail</label>
                <input type="email" id="email" class="form-control p-1" name="email"/>
                <div id="email_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>
              
               
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label>Password</label>
                <input type="password" id="pass_word" class="form-control p-1" name="password"/>
                <div id="password_error" class="text-danger" style="display: none;">*The fields cannot be blank</div>         
              </div>

              <!-- Submit button -->
              <input type="hidden" name="action" value="signup">
              <button type="submit" class="btn btn-info text-light btn-block p-2" onclick="signUpValide(event)">
                Sign Up
         
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
   
  </body>

  <script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="script.js"></script>
</html>
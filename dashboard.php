<?php

include 'conexion.php';
$Username = $_POST['admin'];
$Pass = $_POST['pass_word'];
$Login = $_POST['login'];
$query = "SELECT * FROM `admin` WHERE Name = '$Username' and Password = '$Pass'";
$queryexe = mysqli_query($con, $query);

$count = mysqli_num_rows($queryexe);
if ($count > 0) {
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
</head>
<body>
    <section class="bg_login">
        <style>
        .bg_login {
           background-image: url(./img/bg_dash.png);
           /* height: 100%; */
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
          }
        </style>
            <div class="navbar d-flex justify-content-evenly p-4" style="font-size: 15px;">
                <div>
                    <a class="text-decoration-none" href=""><h3 style="color: white;">myLibrary</h3></a> 
                </div>
				<div>
					<ol class="nav">
                        <li><a class="nav-link" href="" style="color: white;">Features</a></li>
						<li><a class="nav-link" href="" style="color: white;">Cantact</a></li>
						<li><a class="nav-link" href="" style="color: white;">Settings</a></li>
					</ol>
                    <style>
                        a:hover {
                            background-color: #DEB808;
                            border-radius: 5px;
                        }
                    </style>
				</div>				
				<div class="d-flex align-items-center">
					<button class="btn btn-success"> Sign out </button>
				</div>
			</div> <br><br><br><br>

            <h1 class="text-light text-center" style="font-size: 45px; margin-left: 6vw;">Hello admin</h1><br><br><br><br>
           
            <table class="w-75 text-center m-auto text-light" style="font-size: 15px; background-color: #392B27; opacity: 70%; border-radius: 10px">
                <tr>
                    <th class="p-4">Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tbody> 
                    
                </tbody>
            </table> <br><br><br>

            <h1 class="text-light text-center" style="font-size: 45px; margin-left: 6vw;">Add a new book</h1> <br><br>
            <form action="" style="color: #DEB887;">
                <div class="inp_btn">
                    <label class="mt-3">Title</label><br>
                    <input type="text" placeholder="Title" class="w-100 form-outline border border-secondary rounded">
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Author</label><br>
                    <input type="text" placeholder="Author" class="w-100 form-outline border border-secondary rounded">
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Price</label><br>
                    <input type="number" placeholder="Price" class="w-100 form-outline border border-secondary rounded">
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Quantity</label><br>
                    <input type="number" placeholder="Quantity" class="w-100 form-outline border border-secondary rounded">
                </div>
                <button class="inp_btn mt-4 p-2 btn btn-secondary" id="submit">Create</button><br><br><br>
                <style>
                    input {
                        height: 40px;
                        outline: none;
                    }
                    .inp_btn {
                        margin-left: 38%;
                        margin-right: 31%;
                    }
                </style>
            </form>            
    </section>
</body>
</html> 
   <?php } else {
    ?>
    <script>
        alert("Username or Password invalid")
        alert("Please return to the previous page")
    </script>
  <?php }

?>


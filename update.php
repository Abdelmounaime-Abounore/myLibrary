<?php

include 'classes/conexion.php';
$id = $_GET['id'];
        $query = "SELECT * FROM `books` WHERE id = '$id'";
        $queryexe = mysqli_query($con, $query);
        if ($data=$queryexe->fetch_assoc()) {
            $title=$data['Title'];
            $author=$data['Author'];
            $price=$data['Price'];
            $qte=$data['Quantity'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

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
                <a class="text-decoration-none link-primary" href=""><h3>myLibrary</h3></a> 
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

            <h1 class="text-info text-center" style="font-size: 45px; margin-left: 6vw;">Update: <?= $title ?></h1><br><br><br><br>
           

            <h1 class="text-light text-center" style="font-size: 45px; margin-left: 6vw;">Add a new book</h1> <br><br>
            <form action="classes/traitement.php" method="post" name="dash_form" style="color: #DEB887;">
                <div class="inp_btn">
                    <label class="mt-3">Title</label><br>
                    <input type="text" placeholder="Title" class="w-100 form-outline border border-secondary rounded" name="title" value="<?= $title ?>">
                    <div id="title_error" class="text-danger" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Author</label><br>
                    <input type="text" placeholder="Author" class="w-100 form-outline border border-secondary rounded" name="author" value="<?= $author ?>">
                    <div id="author_error" class="text-danger" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Price</label><br>
                    <input type="number" placeholder="Price" class="w-100 form-outline border border-secondary rounded" name="price" value="<?= $price ?>">
                    <div id="price_error" class="text-danger" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Quantity</label><br>
                    <input type="number" placeholder="Quantity" class="w-100 form-outline border border-secondary rounded" name="quantity" value="<?= $qte ?>">
                    <div id="quantity_error" class="text-danger" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button class="inp_btn mt-4 p-2 btn btn-secondary" id="submit">update</button><br><br><br>
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
   
    <!-- <script>
        alert("Username or Password invalid")
        alert("Please return to the previous page")
    </script>
  -->

<!-- ?> -->

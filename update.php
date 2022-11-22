<?php
session_start();
include 'classes/conexion.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    die;
}

$id = $_GET['id'];
        $query = "SELECT * FROM `books` WHERE id = '$id'";
        $queryexe = mysqli_query($con, $query);
        if ($data=$queryexe->fetch_assoc()) {
            $title=$data['Title'];
            $author=$data['Author'];
            $price=$data['Price'];
            $gender=$data['Gender']; 
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
    
</head>
<body>
    <section class="bg_login">
        <style>
        .bg_login {
           background-image: url(./img/bg_dash.png);
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
          }
        </style>
        
            <?php include_once 'header.php'; ?>

            <h1 class="text-light text-center" style="font-size: 45px; margin-left: 6vw;">Update <span class="text-warning"> <?= $title ?> </span></h1><br><br><br><br>
           

            <h1 class="text-light text-center" style="font-size: 45px; margin-left: 6vw;">Add a new book</h1> <br><br>
            <form method="post" action="classes/traitement.php" name="form" style="color: #DEB887;">
                <div class="inp_btn">
                    <label class="mt-3">Title</label><br>
                    <input type="text" placeholder="Title" class="w-100 form-outline border border-secondary rounded" name="title" value=" <?= $title ?>">
                    <div id="up_title_error" class="text-warning" style=" font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Author</label><br>
                    <input type="text" placeholder="Author" class="w-100 form-outline border border-secondary rounded" name="author" value="<?= $author ?>">
                    <div id="up_author_error" class="text-warning" style=" font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Price</label><br>
                    <input type="number" placeholder="Price" class="w-100 form-outline border border-secondary rounded" name="price" value="<?= $price ?>">
                    <div id="up_price_error" class="text-warning" style=" font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Gender</label><br>
                    <input type="text" placeholder="Gender" class="w-100 form-outline border border-secondary rounded" name="gender" value="<?= $gender ?>">
                    <div id="up_gender_error" class="text-warning" style=" font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button class="inp_btn mt-4 p-2 btn btn-secondary" type="submit" onclick="updateValide(event)">update</button><br><br><br>
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

    <script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="script.js"></script>

</body>
</html> 
  
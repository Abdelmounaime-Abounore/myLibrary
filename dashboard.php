<?php

session_start();
include 'classes/conexion.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    die;
}

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

            <?php include_once 'header.php'; ?>

            <h1 class="text-light text-center" style="font-size: 45px;">Hello <?= $_SESSION['admin'] ?></h1><br><br><br><br>
           
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
                    <?php   
                    $query = "SELECT * FROM `books`";
                    $queryexe = mysqli_query($con, $query);
                    $count = mysqli_num_rows($queryexe);
                    if ($count > 0) {
                        while($data = $queryexe->fetch_assoc()){ ?>
                        <tr>
                            <td><?= $data['id']; ?></td>
                            <td><?= $data['Title']; ?></td>
                            <td><?= $data['Author']; ?></td>
                            <td><?= $data['Price']; ?></td>
                            <td><?= $data['Quantity']; ?></td>
                            <td> <a class="text-decoration-none link-primary p-2" href="update.php?id=<?= $data['id']; ?> ">Update</a></td>
                            <td><a  class="text-decoration-none link-danger p-2" href="classes/traitement.php?action=delete&id=<?= $data['id']; ?> ">Delete</a></td>                            
                            <style> a {
                                font-weight: bold; 
                            }
                            td a:hover {
                                background: none;
                            }
                            </style>
                        </tr>
                    <?php } }  else echo '<h3 class="text-danger text-center p-3"> There is no book in the library  :) </h3>'; ?>
                </tbody>
            </table> <br><br><br>

            <h1 class="text-light text-center" style="font-size: 45px;">Add a new book</h1> <br><br>
            <form action="" name="form" style="color: #DEB887;" onsubmit="return dashFormValide()">
                <div class="inp_btn">
                    <label class="mt-3 text-success">Title</label><br>
                    <input type="text" placeholder="Title" class="w-100 form-outline border border-secondary rounded" name="title">
                    <div id="title_error" class="text-warning" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3 text-success">Author</label><br>
                    <input type="text" placeholder="Author" class="w-100 form-outline border border-secondary rounded" name="author">
                    <div id="author_error" class="text-warning" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3 text-success">Price</label><br>
                    <input type="number" placeholder="Price" class="w-100 form-outline border border-secondary rounded" name="price">
                    <div id="price_error" class="text-warning" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3 text-success">Quantity</label><br>
                    <input type="number" placeholder="Quantity" class="w-100 form-outline border border-secondary rounded" name="quantity">
                    <div id="quantity_error" class="text-warning" style="display: none;">*The fields cannot be blank</div> 
                </div>
                <button type="submit" class="inp_btn mt-4 p-2 btn btn-secondary" id="submit">Create</button><br><br><br>
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
	<script src="assets/js/script.js"></script>


</body>
</html> 
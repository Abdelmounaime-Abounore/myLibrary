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

            <h1 class="text-light text-center" style="font-size: 45px;">Hello <span class="text-warning"> <?php echo $_SESSION['admin'] ?> </span></h1><br><br><br><br>
            
           
            <table class="w-75 text-center m-auto text-light" style="font-size: 15px; background-color: #392B27; opacity: 70%; border-radius: 10px">
                <tr>
                    <th class="p-4">Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Gender</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tbody>
                     
                    <?php  
                    $userid = $_SESSION['user_Id']; 
                    $query = "SELECT * FROM `books` WHERE userID = '$userid'";
                    $queryexe = mysqli_query($con, $query);
                    $count = mysqli_num_rows($queryexe);
                    if ($count > 0) {
                        while($data = $queryexe->fetch_assoc()){ ?>
                        <tr>
                            <td class="p-2"><?= $data['Title']; ?></td>
                            <td><?= $data['Author']; ?></td>
                            <td><?= $data['Price']; ?></td>
                            <td><?= $data['Gender']; ?></td>
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
                    <?php } }  else echo '<h3 class="text-danger text-center p-3"> There is no book in the library &#128566; </h3>'; ?>
                </tbody>
            </table> <br><br><br>

            <h1 class="text-light text-center" style="font-size: 45px;">Add a new book</h1> <br><br>
            <form method="POST" action="classes/traitement.php" name="form" style="color: #DEB887;">
                <div class="inp_btn">
                    <label class="mt-3">Title</label><br>
                    <input type="text" placeholder="Title" class="w-100 form-outline border border-secondary rounded" name="title">
                    <div id="title_error" class="text-warning" style="font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Author</label><br>
                    <input type="text" placeholder="Author" class="w-100 form-outline border border-secondary rounded" name="author">
                    <div id="author_error" class="text-warning" style="font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Price (DH)</label><br>
                    <input type="number" placeholder="Price" class="w-100 form-outline border border-secondary rounded" name="price">
                    <div id="price_error" class="text-warning" style="font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <div class="inp_btn">
                    <label class="mt-3">Gender</label><br>
                    <input type="text" placeholder="Gander" class="w-100 form-outline border border-secondary rounded" name="gender">
                    <div id="gender_error" class="text-warning" style="font-size: 12px; display: none;">*The fields cannot be blank</div> 
                </div>
                <input type="hidden" name="action" value="add">
                <button type="submit" class="inp_btn mt-4 p-2 btn btn-secondary" id="submit" onclick="dashFormValide(event)">Create</button><br><br><br>
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
<?php
include 'conexion.php';
if (isset($_POST['action'])) {

    // Login Dashboard
    if($_POST['action']=='login'){
        $Username = $_POST['admin'];
        $Pass = $_POST['pass_word'];
        $query = "SELECT * FROM `admin` WHERE Name = '$Username' and Password = '$Pass'";
        $queryexe = mysqli_query($con, $query);
        $count = mysqli_num_rows($queryexe);
        if ($count > 0) {
            header('Location:../dashboard.php');
            die;
        }
        else {
            header('Location:../index.php');
            die;
        }
        
    }
     // Update Books
     if($_POST['action']=='update'){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $qte = $_POST['quantity'];
        $query = "UPDATE `books` set Title='$title',Author='$author',Price='$price',Quantity='$qte' WHERE id = '$id'";
        $exec = mysqli_query($con, $query);
        header('Location:../dashboard.php');
        die;
     }
}

if (isset($_GET['action'])) {
    // Delete book
    if($_GET['action']=='delete'){
        $id = $_GET['id'];
        $query = "DELETE FROM `books` WHERE id = '$id'";
        $exec = mysqli_query($con, $query);
        header('Location:../dashboard.php');
        die;
    }
}

?>
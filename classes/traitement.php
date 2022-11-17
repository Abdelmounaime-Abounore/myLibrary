<?php
include_once 'conexion.php';

if (isset($_POST['action'])) {


    // signup to database
    if($_POST['action']=='signup'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // save to database 
      $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
      $requet = mysqli_query($con, $query);
      header("Location: ../index.php");
      die;
    }

    // Login Dashboard

    if($_POST['action']=='login'){
        $Username = $_POST['admin'];
        $Pass = $_POST['pass_word'];
        $query = "SELECT * FROM `users` WHERE name = '$Username' and password = '$Pass'";
        $queryexe = mysqli_query($con, $query);
        $count = mysqli_num_rows($queryexe);
        if ($count > 0) {
            session_start();
            $_SESSION['admin']=$Username;
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
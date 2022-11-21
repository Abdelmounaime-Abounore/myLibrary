<?php
include_once 'conexion.php';
session_start();
if (isset($_POST['action'])) {


    // signup to database
    if($_POST['action']=='signup'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // save to database 
      $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
      $requet = mysqli_query($con, $query);
    //   header("Location: ../index.php");
    //   die;
    }

    // Login Dashboard

    if($_POST['action']=='login'){
        $email = $_POST['email'];
        $Pass = $_POST['pass_word'];
        $query = "SELECT * FROM `users` WHERE email = '$email' and password = '$Pass'";
        $queryexe = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($queryexe);
        // var_dump($row);
        // echo '<hr>';
        // echo $row["name"];
        // $names = ['nadir','mounaim', 'hassan'];
        // echo '<hr>';
        // echo $row['id'];
        // var_dump($names);

        // echo $names[0];
        // die();
        $count = mysqli_num_rows($queryexe);
        if($count > 0) {
            session_start();
            $_SESSION['admin'] = $row['name'];
            $_SESSION['user_Id'] = $row['id'];
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
        $gender = $_POST['gender'];
        $query = "UPDATE `books` set Title='$title',Author='$author',Price='$price',Gender='$gender' WHERE id = '$id'";
        $exec = mysqli_query($con, $query);
        header('Location:../dashboard.php');
        die;
     }

     // add book
    if($_POST['action']=='add'){

        $title  = $_POST['title'];
        $author = $_POST['author'];
        $price  = $_POST['price'];
        $gender = $_POST['gender'];
        $userid = $_SESSION['user_Id'];
        // save to database 
          $query = "INSERT INTO `books`(`Title`, `Author`, `Price`, `Gender`, `userID`) VALUES ('$title', '$author', '$price', '$gender', '$userid')";
          $requet = mysqli_query($con, $query);
          header("Location: ../dashboard.php");
          die;
        }
}

if (isset($_GET['action'])) {
    // Delete book
    if($_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $query = "DELETE FROM `books` WHERE id = $id";
        $exec = mysqli_query($con, $query);
        header('Location:../dashboard.php');
        die;
    }
}


?>
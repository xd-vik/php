<?php
session_start();
include("../utils/db.php");


if(isset($_GET['logout'])){
    session_unset();
    header("Location: /php/AuthApp");
}

if(isset($_POST['loginForm'])){

    $email = $_POST['email'];
    $password = $_POST['password']; 
    $id="";
    $name="";
    // login handling

    $query = "select * from users where email='$email' and password='$password'";

    $result = $conn -> query($query);

    if($result->num_rows == 1){
        foreach ($result as $row) {
            $id= $row['id'];
            $name= $row['name'];
        }   

         $_SESSION["user"] = ["id"=>$id,"name"=>$name, "email"=>$email,];
         header("Location: /php/AuthApp");
    }else {
    
    header("Location: /php/AuthApp/?login=true&error=invalid");
    exit(); 
}
}

?>


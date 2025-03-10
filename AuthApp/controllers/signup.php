<?php
session_start();
include("../utils/db.php");

if(isset($_POST['signForm'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

   $user=$conn->prepare("Insert into `users`
    (`id`,`name`, `email`, `password`)
     values (NULL, '$name', '$email', '$password')");

   $result = $user->execute();

    if ($result){
         $_SESSION["user"] = ["name"=>$name, "email"=>$email, "pass"=>$password];
         header("Location: /php/AuthApp");
    }else{
        echo "Error creating user";
    }

}

?>
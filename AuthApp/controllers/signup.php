<?php
include("../utils/db.php");

if(isset($_POST['signForm'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

   $user=$conn->prepare("Insert into `users`
    (`id`,`name`, `email`, `password`)
     values (NULL, '$name', '$email', '$password')");

   $sucess = $user->execute();

    if($sucess){
         echo $name. "Registered successfully";
         
    }else{
        echo "Error creating user";
    }

}

?>
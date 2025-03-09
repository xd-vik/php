<html>
    <head>
        <title>User Login</title>
    </head>
    <body>
    <center> 
        <form action="" method="post">
            <label for="username">Name</label>
            <input type="text" name="username" placeholder="Enter Username" required>
            <br>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
            <br>
            <br>
            <input type="submit" name="submit" value="Login">
            <input type="reset" name="reset" value="reset">
        </form>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(strcmp($user,"vivek")==0 and strcasecmp($pass,"vivek")==0){
             setcookie("user", $user, time() + 3600, "/"); 
            header("Location: welcome.php");  
            exit(); 
        }else
            echo "<font color=red size=5 > Invalid Credentials </font>"; 
     }

?>
        </center>
    </body>
</html>
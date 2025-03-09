<?php
$user = $_COOKIE['user'];
if(isset($user)){
    echo "<center><h1>Welcome $user</h1></center>";
    echo "<center><h2> You are successfully logged in</h2></center>";
    echo "<center><h3> This is a secure area</h3></center>";
    echo "<center><h4> <a href='logout.php'>Logout</a></h4></center>";
}
?>
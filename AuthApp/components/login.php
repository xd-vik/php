<div class="container">
    <h1>Login to dabluDabluDabludotCom</h1>
    <br>
     <form method="post" action="./controllers/login.php">
  <div class="mb-3 w-50">
    <label for="email" class="form-label">Email address</label>
    <input type="email"  name='email' class="form-control" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 w-50">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3 w-50 form-check">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember">Remember Me</label>
  </div><br>
  <div class="w-50 center ">
    <center>
        <?php
if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
    echo "<center><font color='red' size='5'>Invalid Credentials</font></center> <br>";
}
?>
   <button type="submit" name="loginForm" class="btn btn-primary">Submit</button>
   <button type="reset" class="btn btn-warning">Reset</button>
</center>
  </div>
  
</form>
</div>
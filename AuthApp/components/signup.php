<div class="container">
    <h1>Signup to dabluDabluDabludotCom</h1>
    <br>
    <form method="post" action="./controllers/signup.php">
    <div class="mb-3 w-50">
    <label for="name" class="form-label">Full Name</label>
    <input type="name"  name='name' class="form-control">
  </div>
  <div class="mb-3 w-50">
    <label for="email" class="form-label">Email address</label>
    <input type="email"  name='email' class="form-control" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 w-50">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <br>
  <div class="w-50 center ">
    <center>

   <button type="submit" name="signForm" class="btn btn-primary">Submit</button>
   <button type="reset" class="btn btn-warning">Reset</button>
</center>
  </div>
  
</form>
</div>
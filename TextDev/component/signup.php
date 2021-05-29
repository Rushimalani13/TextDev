<?php
$err=false;
$show=false;
$show2=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  require 'db_connect.php';
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $pass2=$_POST["pass2"];
  $UName=$_POST["UName"];
  $phone=$_POST["phone"];
  // $exist=false;
  $existsql="SELECT * FROM `usersdata` WHERE username='$UName'";
  $result=mysqli_query($con,$existsql);
  $numrow=mysqli_num_rows($result);
  if($numrow>0)
  {
    $show=true;
    $msg="Username Aleredy Exists choose another username";
  }
  else
  {
    $exist=false;
    if(($pass == $pass2))
    {
      $hash=password_hash($pass, PASSWORD_DEFAULT);
      $sql="INSERT INTO `usersdata` (`email`, `password`, `username`, `phone`, `dt`) VALUES ('$email', '$hash', '$UName', '$phone', current_timestamp());";
      $res=mysqli_query($con,$sql);
      if($res)
      {
        $err=true;
      }
    }
    else{
      $show2=true;
      $msg2="password do not match";
    }
  }
}

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>TextDev</title>
</head>

<body>
  <?php
  include 'nav.php';
  if($err)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Succesfully!</strong> You are Succesfully Sign Up.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($show){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($show2){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$msg2.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

  echo '<div class="container my-4 ms-150">
    <form action="signup.php" class="needs-validation" method="POST">
      <h1>Sign Up</h1>
      
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter a Email" required>
      </div>
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Password</label>
      <input type="password" name="pass" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter a password" required>
      </div>
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Confrim Password</label>
      <input type="password" name="pass2" class="form-control" id="pass2" aria-describedby="emailHelp" placeholder="confirm password" required>
      </div>
      <div class="mb-3 col-8">
        <label for="exampleInputEName" class="form-label">Username</label>
        <input type="name" name="UName" class="form-control" id="UName" aria-describedby="emailHelp" placeholder="Enter a Name" required >
      </div>
      <div class="mb-3 col-8">
        <label for="exampleInputEmail1" class="form-label">Phone Number(optional)</label>
        <input type="number" maxlength="10" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter a Phone Number">
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    
    </form>
    </div>';    
  ?>
  <div class="cotainer" style="padding-bottom:250px;"></div>
  <?php include 'footer.php';?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>
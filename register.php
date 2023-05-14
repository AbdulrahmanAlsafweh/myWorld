<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
       body{
        text-align: center;
       }
    </style>

</head>
<body>

<?php
      if (isset($_GET['error'])) {
        $error_message = $_GET['error'];
        echo "<div class='alert alert-danger mt-3' role='alert' style='width:50% ;margin:auto' >$error_message</div>";
      }
    ?>
    
<div class="container d-flex align-items-center justify-content-center flex-wrap loginContainer" style="width:20rem ;margin-top:29vh;border:solid 3px #eee; padding:3vh">
      <h2 class="  text-capitalize">Register</h1>  
    <form action="registerAcc.php" method="POST" name="myForm" onsubmit="return validateForm()">
          <div class="input-group mb-3 " style="margin-top: 9px;">
            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
            <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text passwordOne" id="inputGroup-sizing-default-1">Password</span>
            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text repeatedPassword" id="inputGroup-sizing-default-1"> Repeat-Password</span>
            <input type="password"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <button type="submit" name="submit" class="btn btn-primary " style="margin-bottom: 9px;">Register</button>
          <hr>
<p class="text-center" style="display: inline-flex; align-items: center;" ><a href="login.php" style=" text-decoration: none; color:blue">Login</a></p>
<hr>
        </form>
        <hr>
        </div>
     

      </div>
   
      <script>
  function validateForm() {
    var password = document.forms["myForm"]["password"].value;
    var repeatPassword = document.forms["myForm"]["repeatPassword"].value;
    if (password != repeatPassword) {
      alert("Passwords do not match");
      return false;
    }
  }
</script>

</body>
</html>
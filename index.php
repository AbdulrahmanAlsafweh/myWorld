<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- //bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- internal styel -->
    <style>
 
 body {
  max-width: auto; /* set your desired maximum width */
  margin: 0 auto; /* center the page horizontally */
} 
 
  
  a {

    display: inline-block;
    text-decoration: none;
  }
  .topNav{
    border-bottom: lightblue 4px solid;
    background-color: rgb(183, 147, 230);
  }
  .topNav a{
    margin-left: 2vh;
    margin-right: 2vh;
    text-decoration: none;
    color: rgb(79, 99, 106);
  }
  .topNav li:hover{
    border-bottom: black solid 1px;
  }
  </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fliud topNav">
    <nav class="navbar navbar-expand-md navbar-light  ">
         <a href="index.php" class="navbar-brand" style="     border-left:lightblue solid 2px"><img src="assets/imgs/logo_transparent.png"  class="navbar-brand" style="width: 150px;" alt=""></a> 
              
        <!-- burger button for small screen -->
        <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#toggleMobile"
        aria-controls="toggleMobile"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- menu items -->
        <div class="navbar-collapse collapse" id="toggleMobile">
            <ul class="navbar-nav ms-auto text-center">
                <li style="border-right: lightblue 2px solid;">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li style="border-right: lightblue 2px solid;">
                    <a href="#" class="nav-link">Pricing</a>
                </li>
                <li style="border-right: lightblue 2px solid;">
                    <a href="aboutUs.html" class="nav-link">About Us</a>
                </li>
                <?php
              session_start();
               if(isset($_COOKIE["logeddIn"]) && isset($_SESSION['username'])){
                  echo "<li>";
                  echo"<a href='profile.php' class='nav-link'>";
                  
                  echo  "<b>" ; echo$_SESSION['username'];echo"</b>";
                 
                  echo  "</a>";
                 echo "</li>";
               }else{
                echo ("<li>");
                 echo("<a href='login.php' class='nav-link'>Login</a>")  ;
                echo("</li>");
            }
                ?>
            </ul>
        </div>
    </nav>  </div>


    <!-- end of navbar -->


                <!-- first row -->
<div class="row  text-center " style="margin-top: 4vh;">

<div class="col-4 ">
        <a href="#"  class="itemCard ">
        <div class="card" style="width: 18rem;">
            
            <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title text-center">doll</h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <hr>
                <h4 class="card-text text-center">100$</h4>    
            </div>
          </div>
        </a>
        </div>


        <div class="col-4">
        <a href="#"  class="itemCard">
            <div class="card" style="width: 18rem;">
                
                <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title text-center">doll</h5>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr>
                    <h4 class="card-text text-center">100$</h4>    
                </div>
              </div>
            </a>

            </div>

            <div class="col-4">
        <a href="#"  class="itemCard">
            <div class="card" style="width: 18rem;">
                
                <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title text-center">doll</h5>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr>
                    <h4 class="card-text text-center"><del> 100$</del> 90$</h4>    
                </div>
              </div>
            </a>
            </div>
            </div>

                    <hr>  
                  <!-- second row -->


            <div class="row  text-center " style="margin-top: 4vh;">

<div class="col-4 ">
        <a href="#"  class="itemCard ">
        <div class="card" style="width: 18rem;">
            
            <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title text-center">doll</h5>
              <hr>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <hr>
                <h4 class="card-text text-center">100$</h4>    
            </div>
          </div>
        </a>
        </div>


        <div class="col-4">
        <a href="#"  class="itemCard">
            <div class="card" style="width: 18rem;">
                
                <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title text-center">doll</h5>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr>
                    <h4 class="card-text text-center">100$</h4>    
                </div>
              </div>
            </a>

            </div>

            <div class="col-4">
        <a href="#"  class="itemCard">
            <div class="card" style="width: 18rem;">
                
                <img src="assets/imgs/doll.jpg" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title text-center">doll</h5>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <hr>
                    <h4 class="card-text text-center"><del> 100$</del> 90$</h4>    
                </div>
              </div>
            </a>
            </div>
            </div>
    
</body>
</html>
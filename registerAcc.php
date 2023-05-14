
<?php

session_start();
// connection with database
$Host_name='localhost';
$username='abdulrahman';
$DATABASE_PASS = 'Alsafweh12';
$DATABASE_NAME = 'workshop';

$con=mysqli_connect($Host_name,$username,$DATABASE_PASS,$DATABASE_NAME);
if(mysqli_connect_error()){
    exit("error in connection with database" . $con );
}
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_prepare($con,'  Select `username`,`password` From `useraccount` where username=?');
mysqli_stmt_bind_param($sql,'s',$username);
mysqli_stmt_execute($sql);
$result=mysqli_stmt_store_result($sql);
if(mysqli_stmt_num_rows($sql) == 0){
    $stmt = mysqli_prepare($con, 'INSERT INTO `useraccount` (`username`, `password`) VALUES (?, ?)');
        mysqli_stmt_bind_param($stmt,'ss',$username,$password);
    mysqli_stmt_execute($stmt);
    $_SESSION['username']=$username;
    header("Location:index.php");
}
else{
    header("Location:register.php?error=account is already used,or password does not match");
}
?>
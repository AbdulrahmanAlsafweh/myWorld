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


$sql=mysqli_prepare($con,"Select `username`,`password` From `useraccount` ");
mysqli_stmt_execute($sql);
$result=mysqli_stmt_get_result($sql);

while($row =mysqli_fetch_assoc($result)){
    if($username == $row['username'] && $password ==$row['password']){
        header("Location:index.php");
        setcookie("logeddIn",true,strtotime("+month"));
        $_SESSION['username']=$username;
    }
 else {
    header("Location:login.php?error=check your username and password");
 }
}
?>

<?php
include('include/config.php');
session_start();
if (isset($_POST['form'])) 
{
    # code...
    
$un = $_POST['un'];
$ue = $_POST['ue'];
$up = $_POST['up'];
$sql = "select * from bcompany where email='$ue'";
$res = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($res);
if (($row['name'] == $un) && ($row['email'] == $ue) && ($row['password'] == $up)) {
    # code...

    $_SESSION['name'] = $un;
    $_SESSION['email'] = $ue;
    $_SESSION['image'] = $row['image'];
    $_SESSION['islogin'] = 1;


    header("location:dashboard.php");

}

else{

header("location:login.php");

}



}
?>
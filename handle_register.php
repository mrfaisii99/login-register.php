<?php
include('include/config.php');
if (isset($_POST['form'])) {
    # code...
$un = $_POST['un'];
$ua = $_POST['ua'];
$uadd = $_POST['uadd'];
$ue = $_POST['ue'];
$up = $_POST['up'];
$ui = $_FILES['ui'];
$imagename = $ui['name'];
$imagetname = $ui['tmp_name'];

move_uploaded_file($imagetname,"Images/$imagename");
$sql = "insert into bcompany values (null, '$un', $ua,'$uadd','$ue','$up','$imagename')";
mysqli_query($connection,$sql);
header("location:login.php");


    
}

?>
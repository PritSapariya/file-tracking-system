<?php

$username = $_POST['username'];
$password = $_POST['password'];

include("dao.php");

$sql1 = "select employee_id from loginprocess_tbl where username = '$username' and password = '$password'";
$result1 = mysqli_query($connection,$sql1);
$row1 = mysqli_fetch_array($result1);

$sql2 = "select department_id from employee_details where employee_id = '$row1[0]'";
$result2 = mysqli_query($connection,$sql2);
$row2 = mysqli_fetch_array($result2);


if(!$row1) {
    header("location:login-employee.php?error=1");
}
else {

    if($row2['department_id']==0) {
        header("location:admin/indexa.php?id=0");
    }
    else if($row2[0]==1) {
        header("location:datahandler/indexd.php?id=".$row1[0]);
    }
    else if(isset($row2['department_id'])) {
        header("location:employee\indexe.php?id=".$row1[0]); 
    }
    else{
        header("location:login-employee.php?error=1");
    }
}

?>
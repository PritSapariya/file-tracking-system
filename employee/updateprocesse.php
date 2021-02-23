<?php

$id = $_REQUEST['id'];
$employee_name = $_POST['employeename'];
$contact_no = $_POST['employeenumber'];
$gender = $_POST['gender'];
$email_id = $_POST['employeemailid'];
$department = $_POST['department'];
$work_id = $_POST['workid'];
$address = $_POST['employeeaddress'];
$pincode = $_POST['pincode'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

include("../dao.php");

$sql1 = "update employee_details set employee_name = '$employee_name', work_id = $work_id, gender = '$gender',contact_no = $contact_no, department = '$department', address = '$address', pincode = $pincode, email_id = '$email_id' where employee_id = '$id'";
mysqli_query($connection,$sql1);
$sql2 = "update login_tbl set username='$username' where ";
mysqli_query($connection,$sql2);

header("location:indexe.php?id=".$id);
?>
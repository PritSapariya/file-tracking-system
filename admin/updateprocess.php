<?php

$id = $_REQUEST['id'];
$employee_name = $_POST['employeename'];
$contact_no = $_POST['employeenumber'];
$gender = $_POST['gender'];
$email_id = $_POST['employeemailid'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$address = $_POST['employeeaddress'];
$pincode = $_POST['pincode'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

include("../dao.php");

$sql3 = "select department_id from department_tbl where department = '$department'";
$result3 = mysqli_query($connection,$sql3);
$row3 = mysqli_fetch_array($result3);
$department = $row3['0'];
$sql1 = "update employee_details set employee_name = '$employee_name', contact_no = $contact_no, gender = '$gender',designation = '$designation', department_id = '$department', address = '$address', pincode = $pincode, email_id = '$email_id' where employee_id = '$id'";
mysqli_query($connection,$sql1);
$sql2 = "update login_tbl set username='$username'";
mysqli_query($connection,$sql2);

header("location:employeedetailsa.php");
?>
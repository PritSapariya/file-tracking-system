<?php

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

include("..\dao.php");

$sql3 = "select department_id from department_tbl where department = '$department'";
$result3 = mysqli_query($connection,$sql3);
$row3 = mysqli_fetch_array($result3);
$departmentid = $row3['0'];

$sql1 = "insert into employee_details(employee_name,department_id,gender,contact_no,designation,address,pincode,email_id) values ('$employee_name','$departmentid','$gender','$contact_no','$designation','$address','$pincode','$email_id')";
mysqli_query($connection,$sql1);

$sql2 = "select employee_id from employee_details where email_id = '$email_id'";
$result1 = mysqli_query($connection,$sql2);
$row1 = mysqli_fetch_array($result1);
$e_id = $row1['0'];

$sql3 = "insert into loginprocess_tbl (employee_id, username, password) values ('$e_id','$username','$password')";
mysqli_query($connection,$sql3);

header("location:indexa.php");

?>
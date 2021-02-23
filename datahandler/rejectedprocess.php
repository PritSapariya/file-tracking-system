<?php

$name = $_POST['name'];
$work_id = $_POST['work'];
$contact_no = $_POST['number'];
$email_id = $_POST['mailid'];
$address = $_POST['address'];
$date = date("Y-m-d");
$status = "Rejected";

include("../dao.php");
$pincodesql = "select pincode from employee_details where department = 'Data Handler'";
$result1 = mysqli_query($connection,$pincodesql);
$row1 = mysqli_fetch_assoc($result1);

$countsql = "select COUNT( DISTINCT token_id ) from document_status where apply_date = '$date'";
$resultcount = mysqli_query($connection,$countsql);
$row2 = mysqli_fetch_array($resultcount);
$count = $row2[0];
$count = $count + 1;

$token_id = $row1['pincode']."/".$date."/".$count;

$sql = "insert into document_status (token_id,work_id,status,apply_date) values('$token_id','$work_id','$status','$date')";
mysqli_query($connection,$sql);


$sql1 = "insert into user_tbl (token_id,user_name,user_contact_no,user_address,user_email) values('$token_id','$name','$contact_no','$address','$email_id')";
mysqli_query($connection,$sql1);

header("location:indexd.php");

?>

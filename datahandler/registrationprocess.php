<?php
$id = $_REQUEST['id'];
$name = $_POST['name'];
$department_id = $_POST['departmentid'];
$contact_no = $_POST['number'];
$email_id = $_POST['mailid'];
$address = $_POST['address'];
$date = date("Y-m-d");
$status = $_POST['status'];

include("../dao.php");
$pincodesql = "select pincode from employee_details where department_id = '1'";
$result1 = mysqli_query($connection,$pincodesql);
$row1 = mysqli_fetch_assoc($result1);

$countsql = "select COUNT( DISTINCT token_id ) from document_status where apply_date = '$date' and from_employee_id IS NULL";
$resultcount = mysqli_query($connection,$countsql);
$row2 = mysqli_fetch_array($resultcount);
$count = $row2[0];
$count = $count + 1;

$date1 = date("y-m-d");

$token_id = $row1['pincode']."-".$date1."-".$count;
/*
if($status=='Accepted'){
    $url = 'http://localhost:5000/'.$token_id.'/91'.$contact_no.'/'.$status;
    $response = file_get_contents($url);
}

else if($status=='Rejected'){
    $url = 'http://localhost:5001/'.$token_id.'/91'.$contact_no.'/'.$status;
    $response = file_get_contents($url);
}
*/

if($status == 'Accepted') {$status = 'Pending';}

$employeesql = "select employee_id from employee_details where department_id = '$department_id' and role = 0";
$result0 = mysqli_query($connection,$employeesql);
$temp = mysqli_fetch_assoc($result0);
$currentemployeeid = $temp['employee_id'];

$sql = "insert into document_status (token_id,department_id,status,apply_date,c_employee_id) values('$token_id','$department_id','$status','$date','$currentemployeeid')";
mysqli_query($connection,$sql);


$sql1 = "insert into user_tbl (token_id,user_name,user_contact_no,user_address,user_email) values('$token_id','$name','$contact_no','$address','$email_id')";
mysqli_query($connection,$sql1);

header("location:indexd.php?id=".$id);

?>

<?php 

$token_id = $_REQUEST['token_id'];
$employee_id = $_REQUEST['id'];
$transfer_employee_id = $_REQUEST['employee_id'];
$document_comment = $_REQUEST['documentcomment'];
$cstatus = 'Transfered';
$status = 'Pending';
$date = date("Y-m-d");

include("../dao.php");

$updatesql = "update document_status set to_employee_id = '$transfer_employee_id',status = '$cstatus',complete_date = '$date',document_comment = '$document_comment' where token_id = '$token_id' and c_employee_id = '$employee_id'";
mysqli_query($connection,$updatesql);

$departmentsql = "select department_id from employee_details where employee_id = '$employee_id'";
$result = mysqli_query($connection,$departmentsql);
$row = mysqli_fetch_array($result);
$department_id = $row['0'];

$insertsql = "insert into document_status (token_id,department_id,status,apply_date,from_employee_id,c_employee_id) values('$token_id','$department_id','$status','$date','$employee_id','$transfer_employee_id')";
mysqli_query($connection,$insertsql);

header("location:pendinge.php?id=".$employee_id);

?>
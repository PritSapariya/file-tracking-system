<?php
$token_id = $_REQUEST['token_id'];
$id = $_REQUEST['id'];

include("../dao.php");
$date = date("Y-m-d");

$sql = "update document_status set status = 'Completed', complete_date = '$date' where token_id = '$token_id' and c_employee_id = '$id' and complete_date='0000-00-00'";
mysqli_query($connection,$sql);

$sql1 = "select 	user_contact_no from user_tbl where token_id = '$token_id'";
$result = mysqli_query($connection,$sql1);
$row = mysqli_fetch_array($result);
$contact_no =$row['0'];

$url = $url = 'http://localhost:5002/'.$token_id.'/91'.$contact_no;
$response = file_get_contents($url);

header("location:pendinge.php?id=".$id);

?>
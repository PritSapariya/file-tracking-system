<?php 

$token_id = $_REQUEST['token_id'];
include("../dao.php");
$sql = "update document_status set status = 'Pending' where token_id = '$token_id' and status = 'Rejected'";
mysqli_query($connection,$sql);

header("location:rejectedd.php?id=".$id);

?>`
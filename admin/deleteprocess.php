<?php

$id = $_REQUEST['id'];

include("..\dao.php");

$sql = "delete from employee_details where employee_id='$id'";

mysqli_query($connection,$sql);


header("location:employeedetailsa.php");
?>

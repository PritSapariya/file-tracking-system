
<?php 

$token_id = $_POST['tokken_id'];

include("dao.php");

$sql = "select token_id,status,apply_date,c_employee_id,to_employee_id from document_status where token_id = '$token_id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);



while($row['to_employee_id']!=0){

    $E_ID = $row['c_employee_id'];
    $sql1 = "select employee_name,designation from employee_details where employee_id = '$E_ID'";
    $result1 = mysqli_query($connection,$sql1);
    $row1 = mysqli_fetch_array($result1);
?>

<div class="outside-cont">
    <div class="token-id"> <?php echo $row['token_id']; ?></div>
    <div class="status"> <?php echo $row['status']; ?> </div>
    <div class="date"> <?php echo $row['apply_date']; ?> </div> 
    <div class="name"> <?php echo $row1['employee_name']; ?> </div>
    <div class="post"> <?php echo $row1['designation']; ?> </div>
</div>
<hr class="special-hr">

<?php
}
?>

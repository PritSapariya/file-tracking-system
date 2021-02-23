<?php include("header.php");?>

<style>

    h1 {
    padding: 0;
    line-height: 3rem;
    text-align: center;
    margin: 15px;
    font-size: 2.3rem;
    font-weight: 400;
    }

    h2 {
        padding: 0px;
        margin: 0px 0px;
        font-weight: 400;
    }

    h4 {
        padding: 5px 0px;
        margin: 0px 0px;
    }

    .details {
    margin: 0;
    background-color: white;
    border-radius: 3px;
    overflow: auto;
    scroll-behavior: smooth;
}

    .contain {
        margin: 50px 20px 20px 20px;
        border: 2px solid rgb(100, 100, 100);
        border-radius: 15px;
        height: 480px;
        margin-top: 70px;
        display: flex;
        flex-direction: column;
        border-radius: 3px;
    }


    .outside-cont {
        display: flex;
        justify-content: space-around;
        background-color:white;
        margin-top: 0;
        padding: 5px 0;
        line-height:30px;
    }

    .history-title {
        text-align: center;
        text-decoration: underline;
        padding: 10px;
        background-color:  rgb(0, 150, 136);
    }

    .special-hr {
        margin: 8px 20px;
    }

    .token-id {
        width: 180px;
    }

    .status {
        width: 120px;

    }

    .date {
        width: 130px;

    }

    .name {
        width: 200px;

    }

    .post {
        width: 140px;

    }

</style>

</head>

<body>
<?php include("navbar.php");?>

<div class="contain">
<div class="history-container">
    <div class="history-title">
        <h2>History</h2>
    </div>

    <div class="outside-cont" style="border-top:2px solid rgb(100, 100, 100);
            border-bottom:2px solid rgb(100, 100, 100);">
        <div class="token-id"><strong><h4>Token no.</h4></strong></div>
        <div class="status"><strong><h4>Status</h4></strong></div>
        <div class="date"><strong><h4>Date</h4></strong></div>
        <div class="name"><strong><h4>Employee name</h4></strong></div>
        <div class="post"><strong><h4>Employee post</h4></strong></div>
    </div>
</div>

<div class="details">

<?php 

$token_id = $_POST['tokken_id'];

include("dao.php");

$sql = "select document_id,token_id,status,apply_date,c_employee_id,to_employee_id from document_status where token_id = '$token_id' order by document_id desc";
$result = mysqli_query($connection,$sql);




while($row = mysqli_fetch_assoc($result)){

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

</div>
</div>
<?php include("footer.php");?> 
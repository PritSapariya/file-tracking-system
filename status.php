<?php include("header.php");?>

<style>

    h2 {
        margin: 5px 0;
        margin-top: 10px;
    }

    h4 {
        margin: 5px 0;
    }

    .outside-cont {
        border: 2px solid rgb(200, 200, 200);
        border-radius: 20px;
        margin: 23px 50px;
        margin-top: 90px;
        text-align: center;
    }

    .tital{
        text-decoration: underline;
    }

    .inside-cont{
        background-color: rgb(0, 150, 136);
        display: inline-block;
        border: 2px solid rgb(200, 200, 200);
        border-radius: 20px;
        margin: 20px;
        margin-bottom: 10px;
        padding:20px;
        padding-top: 15px;
    }

    header {
        background-color: rgb(0, 150, 136);
        border-radius: 10px;
        padding: 10px;
    }

    .body {
        background-color: white;
        width: 600px;
        border-radius: 10px;
        text-align: left;
        padding: 10px;
    }

    .body div{
        margin-top: 10px;
    }

    .futar{
        background-color: rgb(0, 150, 136);
        border-radius: 10px;
        margin: 20px;
        margin-bottom: 0;
    }

    .combain {
        display: flex;
        margin-top: 0px;
    }

    .combain div {
        width: 45%;
    }

    .sec {
        margin-left:10%;
    }

    .batan {
        border-radius: 8px;
        height: 35px;
        width: 60px;
        background-color: black;
        color: white;
    }

    .batan:hover {
        background-color: rgb(80, 80, 80);
    }

    .histry {
        margin-bottom: 20px;
    }

    @media screen and (max-width: 800px) {
        .combain {
            display: block;
        }
        .combine div {
            width: 100%;
        }
        .sec {
            margin-left: 0;
        }
        .body {
            width: 400px;
        }
    }

    @media screen and (max-width: 600px) {
        .body {
            width: 250px;
        }
    }

</style>

</head>

<body>

<?php include("navbar.php");?>

<?php
//

$contact_no = $_POST['contact'];
$token_id = $_POST['token'];

include("dao.php");

$sql = "select user_name from user_tbl where token_id = '$token_id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);

if(!$row){
    header("location:home.php?error=1");
}

$username = $row['0'];

$sql1 = "select status,document_comment from document_status where token_id = '$token_id' and to_employee_id = '0'";
$result1 = mysqli_query($connection,$sql1);
$row1 = mysqli_fetch_array($result1);

$status = $row1['0'];
$comment = $row1['1'];

//
?>
    <div class="outside-cont">
        <div class="tital">
            <h2>File status</h2>
        </div>
        <div class="inside-cont">
            <header>
                <h4>Checking status of your file is much easier..!</h4>
                <h5>Here is your file status.</h5>
            </header>
            <div class="body">
                <div class="combain" style="margin: 0;">
                    <div><strong>Token no. :</strong> <?php echo $token_id?></div>
                    <div class="sec"><strong>Username : </strong><?php echo $username; ?> </div>
                </div>
                <div class="combain" style="margin: 0;">
                    <div><strong>Contact no. : </strong><?php echo $contact_no; ?> </div>
                    <div class="sec"><strong>Status : </strong> <?php echo $status; ?></div>
                </div>
                <div style="margin: 10px 0;overflow: auto;"><?php if($status=="Rejected"){ ?>
                <strong>Comment : </strong><?php echo $comment;
                } ?>
                </div>
            </div>    
            <footer class="futar">
                <div><a href="home.php"><button class="batan">Back</button></a></div>
            </footer>
        </div>
        <div class="histry">
            <form action="statushistory.php" method="POST">
                <input type="hidden" name="tokken_id" value="<?php echo $token_id; ?>">
                <button type="submit" class="batan">History</button>
            </form>
        </div>
    </div>
    
<?php include("footer.php");?> 
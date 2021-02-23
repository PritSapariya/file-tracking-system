  <?php include("headere.php");?>

  <link rel="stylesheet" href="assets/css/basice.css" />

</head>

<body>
<?php
    $id = $_REQUEST['id'];
    ?>

    <section>
        <?php include("menue.php");?>
    </section>

    <section>
      <h1>Transferred Files</h1>
      <div class="container">
        <div class="operations">
          <ul>
            <li>Operations</li>
          </ul>
          <div class="op-items"><a href="indexe.php?id=<?php echo $id;?>">Dashboard</a></div>
          <div class="op-items"><a href="alle.php?id=<?php echo $id;?>">All files</a></div>
          <div class="op-items"><a href="pendinge.php?id=<?php echo $id;?>">Pending files</a></div>
          <div class="op-items"><a href="transferede.php?id=<?php echo $id;?>">Transferred files</a></div>
          <div class="op-items"><a href="completede.php?id=<?php echo $id;?>">Completed files</a></div>
          <div class="op-items"><a href="rejectede.php?id=<?php echo $id;?>">Rejected files</a></div>
        </div>

        <div class="info">
          <div class="details-container">
            <div class="details-title">
              <h2>Details</h2>
            </div>
      
            <div class="row-details" style="border-top:2px solid black;
            border-bottom:2px solid black;">
                  <div class="span sr"><h4>Sr. No.</h4></div>
                  <div class="span token-id"><h4>Token No.</h4></div>
                  <div class="span span-button name"><h4>Name</h4></div>
              </div>
            </div>

            <div class="details">
              <?php

                include("../dao.php");

                $count = 1;

                $sql = "select token_id,to_employee_id from document_status where c_employee_id = '$id' and status = 'Transfered'";
                $result = mysqli_query($connection,$sql);

                while($row = mysqli_fetch_assoc($result)) {

                ?>
                <div class="row-details">
                  <div class="span sr"><?php echo $count;?></div>
                  <div class="span token-id"><?php echo $row['token_id']; ?></div>
                  <div class="span name">
                    <?php  
                    $temp = $row['to_employee_id'];

                    $sql="select employee_name from employee_details where employee_id='$temp'";
                    $result2 = mysqli_query($connection,$sql);
                    $row2 = mysqli_fetch_array($result2);

                    echo $row2['0'];

                  
                    ?>
                  </div>
                </div>
                  <hr class="special-hr">
                <?php
                $count = $count + 1;
                }

              ?>

          </div>
        </div>
      </div>
    </section>

</body>
</html>
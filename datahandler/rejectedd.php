  <?php include("headerd.php");?>

  <link rel="stylesheet" href="assets/css/basicd.css" />

</head>

<body>

    <section>
        <?php include("menud.php");?>
    </section>

    <?php
    $id = $_REQUEST['id'];
    
    ?>
    <section>
      <h1>Rejected Files</h1>
      <div class="container">
        <div class="operations">
          <ul>
            <li>Operations</li>
          </ul>
          <div class="op-items"><a href="indexd.php?id=<?php echo $id?>">Dashboard</a></div>
          <div class="op-items"><a href="allentriesd.php?id=<?php echo $id?>">All Files</a></div>
          <div class="op-items"><a href="rejectedd.php?id=<?php echo $id?>">Rejected Files</a></div>
        </div>

        <div class="info">
          <div class="details-container">
            <div class="details-title">
              <h2>Details</h2>
            </div>

            <div class="row-details" style="border-top:2px solid black;
            border-bottom:2px solid black;">
              <div class="span sr"><h4>Sr. No.</h4></div>
              <div class="span token-id"><h4>Token Number</h4></div>
              <div class="span span-button action-1"><h4>Action</h4></div>
            </div>

            <div class="details">
              <?php

                include("../dao.php");

                $count = 1;
                /*$worksql = "select work_id from loginprocess_tbl where employee_id = '$id'";
                $res = mysqli_query($connection,$worksql);
                $work_id = mysqli_fetch_row($res);
                $temp = $work_id[0];*/
                
                $sql = "select token_id from document_status where status = 'Rejected'";
                $result = mysqli_query($connection,$sql);
                
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row-details">
                  <div class="span sr"><?php echo $count; ?></div>
                  <div class="span token-id"><?php echo $row['token_id']; ?></div>
                  <div class="span span-button action-1"><a href="acceptprocess.php?token_id=<?php echo $row['token_id'];?>&&id=<?php echo $id;?>"><button class="btna green-btna">Accept</button></a></div>
                  
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
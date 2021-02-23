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
      <h1>All Files</h1>
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
              <div class="span status"><h4>Status</h4></div>
            </div>
          </div>

          <div class="details">

              <?php

                include("../dao.php");
                $count = 1;
                $date = date("Y-m-d");

                $sql = "select token_id, status from document_status where to_employee_id IS NULL";
                $result = mysqli_query($connection,$sql);

                while($row = mysqli_fetch_assoc($result)) {

                ?>
                  <div class="row-details">
                    <div class="span sr"><?php echo $count;?></div>
                    <div class="span token-id"><?php echo $row['token_id']; ?></div>
                    <div class="span status"><?php echo $row['status']; ?></div>
                      
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
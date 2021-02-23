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
      <h1>Dashboard</h1>
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

          <?php 
          include("../dao.php");
          $sql = "select COUNT(DISTINCT token_id) from document_status where c_employee_id='$id'";
          $result1=mysqli_query($connection,$sql);
          $row1=mysqli_fetch_array($result1);

          $pendingsql = "select COUNT(DISTINCT token_id) from document_status where status='Pending' and c_employee_id='$id'";
          $result2=mysqli_query($connection,$pendingsql);
          $row2=mysqli_fetch_array($result2);

          $rejectedsql = "select COUNT(DISTINCT token_id) from document_status where status='Rejected' and c_employee_id='$id'";
          $result3=mysqli_query($connection,$rejectedsql);
          $row3=mysqli_fetch_array($result3);

          $completedsql = "select COUNT(DISTINCT token_id) from document_status where status='Completed' or status='Transfered' and c_employee_id='$id'";
          $result4=mysqli_query($connection,$completedsql);
          $row4=mysqli_fetch_array($result4);
          ?>

          <div class="overview-title"><h2>Overview</h2></div>
          <div class="overview">
            
            <div class="overview-container">
              <div class="overview-items"><strong><h1><?php echo $row1['0'];?></h1>Total files</strong></div>
              <div class="overview-items"><strong><h1><?php echo $row2['0'];?></h1>Pending files</strong></div>
            </div>
            <div class="overview-container">
              <div class="overview-items"><strong><h1><?php echo $row3['0'];?></h1>Rejected files</strong></div>
              <div class="overview-items"><strong><h1><?php echo $row4['0'];?></h1>Completed files</strong></div>
            </div>

          </div>
        </div>
      </div>
    </section>
</body>
</html>

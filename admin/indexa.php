  <?php include("headera.php");?>

  <link rel="stylesheet" href="assets/css/basic.css" />

</head>

<body>

    <section>
        <?php include("menua.php");?>
    </section>

    <section>
      <h1>Dashboard</h1>
      <div class="container">
        <div class="operations">
          <ul>
            <li>Operations</li>
          </ul>
          <div class="op-items"><a href="indexa.php">Dashboard</a></div>
          <div class="op-items"><a href="employeedetailsa.php">Employee Details</a></div>
          <div class="op-items"><a href="newemployeea.php">New Employee</a></div>
          <div class="op-items"><a href="filedetailsa.php">File Details</a></div>
          <div class="op-items"><a href="searcha.php">Search File</a></div>
        </div>

        <div class="info">

          <?php

          //Queries for getting number of files 

          include("../dao.php");

          $totalsql = "select COUNT(DISTINCT token_id) from document_status";
          $result1 = mysqli_query($connection,$totalsql);
          $row1 = mysqli_fetch_array($result1);
          
          $pendingsql = "select COUNT(DISTINCT token_id) from document_status where status = 'Pending'";
          $result2 = mysqli_query($connection,$pendingsql);
          $row2 = mysqli_fetch_array($result2);

          $rejectedsql = "select COUNT(DISTINCT token_id) from document_status where status = 'Rejected'";
          $result3 = mysqli_query($connection,$rejectedsql);
          $row3 = mysqli_fetch_array($result3);
          
          $completedsql = "select COUNT(DISTINCT token_id) from document_status where status = 'Completed' or status = 'Transfered'";
          $result4 = mysqli_query($connection,$completedsql);
          $row4 = mysqli_fetch_array($result4);

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

    <section>
      <?php include("footera.php"); ?>
    </section>

</body>
</html>
<?php include("headera.php");?>

<link rel="stylesheet" href="assets/css/basic.css" />

</head>

<body>

  <section>
      <?php include("menua.php");?>
  </section>

  <section>
    <h1>File Details</h1>
    <div class="container">
      <div class="operations">
        <ul>
          <li>Operations</li>
        </ul>
        <div class="op-items"><a href="indexa.php">Dashboard</a></div>
        <div class="op-items"><a href="employeedetailsa.php">Employee Details</a></div>
        <div class="op-items"><a href="newemployeea.php">New Employee</a></div>
        <div class="op-items"><a href="filedetailsa.php">File Details</a></div>
      </div>

      <div class="info">

        <div class="details-title">
          <h2>Details</h2>
        </div>
    
        <div class="details">
            <hr class="special-hr">

            <div>
                <span class="span">Sr. No.</span>
                <span class="span">Token No.</span>
                <span class="span">Status</span>
                <span class="span span-button">Action</span>
            </div>

            <hr class="special-hr">

            <?php

              include("../dao.php");
              
              $count = 1;
              //Below code is only for Employee ID...........
              /*$worksql = "select work_id from loginprocess_tbl where employee_id = '$id'";
              $res = mysqli_query($connection,$worksql);
              $work_id = mysqli_fetch_row($res);
              $temp = $work_id[0];*/
              $date = date("Y-m-d H-m-s");
              //$date2 = "2020-02-24";
              //$diff = date_diff($date,$date2);
              echo $date;
              /*$sql = "select token_id, status from document_status where status = 'Pending'";
              $result = mysqli_query($connection,$sql);
              
              while($row = mysqli_fetch_assoc($result)) {

              ?>
              <div>
                 <span class="span"><?php echo $count; ?></span>
                <span class="span"><?php echo $row['token_id']; ?></span>
                <span class="span"><?php echo $row['status']; ?></span>
                
                <span class="span span-button"><a href="updateemployee.php?id=<?php echo $row['token_id'];?>"><button class="btna green-btna">Update</button></a></span>
                <span class="span span-button"><a href="deleteprocess.php?id=<?php echo $row['token_id'];?>"><button class="btna red-btna">Delete</button></a></span>
              </div>

              <?php
              $count = $count + 1;
              }
              */
              ?>
            
        </div>
      </div>
    </div>
  </section>

</body>
</html>
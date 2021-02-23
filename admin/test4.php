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

            <div>
            <hr class="title-hr">
                <span class="span">Sr. No.</span>
                <span class="span">Token No.</span>
                <span class="span">Status</span>
                <span class="span span-button">Action</span>
            <hr class="title-hr">
            </div>

            

            <?php

              include("../dao.php");
              
              $count = 1;
              //Below code is only for Employee ID...........
              /*$worksql = "select work_id from loginprocess_tbl where employee_id = '$id'";
              $res = mysqli_query($connection,$worksql);
              $work_id = mysqli_fetch_row($res);
              $temp = $work_id[0];*/
              
              $sql = "select token_id, status from document_status";
              $result = mysqli_query($connection,$sql);
              
              while($row = mysqli_fetch_assoc($result)) {

              ?>
              <div class="details-row">
                <div class="sr-no span"><?php echo $count; ?></div>
                <div class="span"><?php echo $row['token_id']; ?></div>
                <div class="span"><?php echo $row['status']; ?></div>
                
                <div class="span span-button"><a href="updateemployee.php?id=<?php echo $row['token_id'];?>"><button class="btna green-btna">Update</button></a></div>
                <div class="span span-button"><a href="deleteprocess.php?id=<?php echo $row['token_id'];?>"><button class="btna red-btna">Delete</button></a></div>
              </div>

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
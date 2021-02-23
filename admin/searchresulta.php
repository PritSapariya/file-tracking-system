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
        <div class="op-items"><a href="searcha.php">Search File</a></div>
      </div>

      <div class="info">
        <div class="details-container">
          <div class="details-title">
            <h2>Search results</h2>
          </div>
    
        <div class="row-details" style="border-top:2px solid black;
          border-bottom:2px solid black;">
            <div class="span sr"><h4>Sr. No.</h4></div>
            <div class="span token-id"><h4>Token No.</h4></div>
            <div class="span name"><h4>Employee Name</h4></div>
            <div class="span status"><h4>Status</h4></div>
          </div>
        </div>

            <div class="details">

            <?php

              include("../dao.php");
              
              $count = 1;
              
              $sql = "select token_id,c_employee_id,status from document_status";
              $result = mysqli_query($connection,$sql);
              
              
              while($row = mysqli_fetch_assoc($result)){

              $employee_id = $row['c_employee_id'];
              $employeesql = "select employee_name from employee_details where employee_id='$employee_id'";
              $result2 = mysqli_query($connection,$employeesql);
              $row2 = mysqli_fetch_assoc($result2);

              ?>
              <div class="row-details">
                <div class="span sr"><?php echo $count;?></div>
                <div class="span token-id"><?php echo $row['token_id']; ?></div>
                <div class="span name"><?php echo $row2['employee_name']; ?></div>
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
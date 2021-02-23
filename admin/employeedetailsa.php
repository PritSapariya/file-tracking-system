  <?php include("headera.php");?>

  <link rel="stylesheet" href="assets/css/basic.css" />

  <style>

  </style>

</head>

<body>

    <section>
        <?php include("menua.php");?>
    </section>

    <section>
      <h1>Employee Details</h1>
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
              <h2>Details</h2>
            </div>
          
            <div class="row-details" style="border-top:2px solid black;
            border-bottom:2px solid black;">
                <div class="span sr"><h4>Sr. No.</h4></div>
                <div class="span name"><h4>Employee Name</h4></div>
                <div class="span department"><h4>Department</h4></div>
                <div class="span contact"><h4>Contact No.</h4></div>
                <div class="span span-button action-2"><h4>Action</h4></div>
              </div>
            </div>

            <div class="details">

                <?php

                include("../dao.php");

                $count = 1;
                $sql = "select employee_id,employee_name, department_id, contact_no from employee_details where employee_id!='0'";
                $result = mysqli_query($connection,$sql);
                
                
                while($row = mysqli_fetch_assoc($result)) {
                $token = $row['department_id'];
                $departmentsql = "select department from department_tbl where department_id ='$token'";
                $result2 = mysqli_query($connection,$departmentsql);
                $row2 = mysqli_fetch_assoc($result2);
                ?>
            
                <div  class="row-details">
                  <div class="span sr"><?php echo $count; ?></div>
                  <div class="span name"><?php echo $row['employee_name']; ?></div>
                  <div class="span department"><?php echo $row2['department']; ?></div>
                  <div class="span contact"><?php echo $row['contact_no']; ?></div>
                  <div class="span action-2">
                    <span class="span"><a href="updateemployee.php?id=<?php echo $row['employee_id'];?>"><button class="btna green-btna">Update</button></a></span>
                    <span class="span span-button"><a href="deleteprocess.php?id=<?php echo $row['employee_id'];?>"><button class="btna red-btna">Delete</button></a></span>
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
<?php include("headera.php");?>

<link rel="stylesheet" href="assets/css/basic.css" />

<style>

  h2 {
    margin:0px 0px 0px -20px;
  }

  input {
    border-radius: 5px;
  }

  select {
    border: 2px solicd #989898;
    border-radius: 3px;
  }

  textarea {
    border-radius: 5px;
    border: 2px solid #989898;
    margin: 10px 0px 0px 0px;
    padding: 0px 0px 5px 0px;
  }

  .info {
    overflow: auto;
    scroll-behavior: smooth;
    background-color: white;
    border-radius: 10px;
    border: 3px solid lightgrey;
    align-items: center;
  }

  .info-title {
    margin: 20px;
    text-align: center;
  }

  .info-body {
    background-color: rgb(245, 245, 245);
    width: 50rem;
    padding: 0px 40px;
    margin: 0px 0px 20px 0px;
    border-radius: 10px;
    border: 2px solid lightgrey;
  }

  .info-item  {
    margin: 30px;
  }

  .seperator {
    margin: 60px;
  }

  .info-btn {
    margin: 0px 0px 20px 235px;
  }

</style>

</head>

<body>

  <section>
      <?php include("menua.php");?>
  </section>

  <section>
    <h1>New Employee</h1>
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
        $token_id = $_REQUEST['token_id'];

        include("../dao.php");
        $sql = "select * from document_status where token_id = '$token_id'";
               
        $result = mysqli_query($connection,$sql);

        while($row = mysqli_fetch_assoc($result)) {

        
        ?>

        <?php
            $e_id = $row['c_employee_id'];

            include("../dao.php");
            $sql1 = "select * from employee_details where employee_id = '$e_id'";
            
            $result1 = mysqli_query($connection,$sql1);
            $row1 = mysqli_fetch_assoc($result1);


        ?>

        <div class="info-body" style="margin: 30px 0 15px 0;">
          <div class="info-item">
            <h4>Token no. : <?php echo $row['token_id'];?></h4>
          </div>

          <div class="info-item">
            <h4>Employee name : <?php echo $row1['employee_name']?></h4>
            
          </div>

          <div class="info-item" style="display:flex;justify-content:space-between;">
            <div style="width:45%">
                <h4>Apply date : <?php echo $row['apply_date'];?></h4>
            </div>
            
            <div style="width:45%">
               <?php if($row['status'] == 'Completed') { echo "Complete Date:".$row['complete_date']; } else if($row['status'] == 'Tra') ?>
            </div>
        </div>

        <div class="info-item">
            <h4>Status : <?php echo $row['status'];?></h4>
        </div>
          
          <div class="info-item" style="height:40px;">
            <h4>Comment : <?php echo $row['document_comment']?></h4><br>
          </div>

        </div>

        <?php 

        }
        ?>

      
      </div>
    </div>
  </section>

</body>
</html>
<?php include("headere.php");?>

<link rel="stylesheet" href="assets/css/basice.css" />

<style>

  h2 {
    margin:0px 0px 0px -20px;
  }

  input {
    border-radius: 5px;
  }

  select {
    border: 2px solid #989898;
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
    <?php
    $id = $_REQUEST['id'];
    ?>

  <section>
      <?php include("menue.php");?>
  </section>

  <section>
    <h1>Employee Details</h1>
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
        <div class="info-title">
        </div>
        
        <?php
            //To show data from database .............................
            $id = $_REQUEST['id'];
            include("../dao.php");
            $sql = "select * from employee_details where employee_id = '$id'";
            $result = mysqli_query($connection,$sql);
            $row = mysqli_fetch_assoc($result);
            $temp = $row['department_id'];
            //to fetch data from department table to find out department......... 
            $sql1 = "select department from department_tbl where department_id = '$temp'";
            $result1 = mysqli_query($connection,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            //to fetch data from login tale........................
            $sql2 = "select * from loginprocess_tbl where employee_id = '$id'";
            $result2 = mysqli_query($connection,$sql2);
            $row2 = mysqli_fetch_assoc($result2);
            

        ?>

        <form action="updateprocesse.php?id=<?php echo $row['employee_id'];?>" method="post" class="info-body">
            
          <div class="info-item" >
            Name :
              <input type="text" style="width:40%;" name="employeename" value="<?php echo $row['employee_name'];?>">
          </div class="info-item">

          <div class="info-item">
            <span>
              Contact no. :
              <input type="nummber" name="employeenumber" value="<?php echo $row['contact_no'];?>">
            </span>
            <span class="seperator">
              Gender :
              <input type="radio" name="gender" value="M" <?php if($row['gender']=='M') { echo "checked";}?>>Male
              <input type="radio" name="gender" value="F" <?php if($row['gender']=='F') { echo "checked";}?>>Female
              <input type="radio" name="gender" value="O" <?php if($row['gender']=='O') { echo "checked";}?>>Other
            </span>
          </div>

          <div class="info-item">
            E-mail :
            <input type="email" style="width:40%;" name="employeemailid" value="<?php echo $row['email_id'];?>">
          </div>
          
          <div class="info-item">
              Department :
              <select name="department">
                <option value="Data Handler" <?php if($row1['department']=='Data Handler') { echo "selected";}?>>Data Handler</option>
                <option value="Registration" <?php if($row1['department']=='Aadhar card') { echo "selected";}?>>Aadhar card</option>
                <option value="Income Tax" <?php if($row1['department']=='Income Tax') { echo "selected";}?>>Income Tax</option>
                <option value="Election" <?php if($row1['department']=='Election') { echo "selected";}?>>Election</option>
                <option value="Technical" <?php if($row1['department']=='Technical') { echo "selected";}?>>Technical</option>
              </select>

            <span class="seperator">
            Designation :
                  <select name="designation">
                    <option value="clerk" <?php if($row['designation']=='clerk') { echo "selected";}?>>Clerk</option>
                    <option value="officer" <?php if($row['designation']=='officer') { echo "selected";}?>>Officer</option>
                    <option value="HOD" <?php if($row['designation']=='HOD') { echo "selected";}?>>HOD</option>
                  </select>
            </span>
          </div>
          
          <div class="info-item">
            Address :<br>
            <input class="%"type="text" name="employeeaddress" value="<?php /*Add CSS Of this class*/echo $row['address'];?>">
          </div>

          <div class="info-item">
            PIN :
            <input type="number" name="pincode"value="<?php echo $row['pincode'];?>">
          </div>
          
          <div class="info-item">
            <span>
              Username :
              <input type="text" name="username" value="<?php echo $row2['username'];?>">
            </span>
            <span class="seperator">
              Password :
              <input type="password" name="password">
            </span>
          </div>
          <div class="info-item">
          <span>
              Confirm Password :
              <input type="password" name="confirmpassword">
            </span>
          </div>      

          <div class="info-btn">
          <span>
            <button type="submit" class="btna green-btna" >Save</button>
          </span>
          <span class = "seperator">
            <a href="employeedetailsa.php"><button type="submit" class="btna red-btna" >Cancel</button></a>
          </span>
          
          </div>

        </form>
      </div>
    </div>
  </section>

</body>
</html>
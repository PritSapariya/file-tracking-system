<?php include("headere.php");?>

<link rel="stylesheet" href="assets/css/basice.css" />

</head>

<body>
<?php
  $id = $_REQUEST['id'];
  $token_id = $_REQUEST['token_id'];
  ?>

  <section>
      <?php include("menue.php");?>
  </section>

  <section>
    <h1>Transferred Files</h1>
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
        <div class="details-container">
          <div class="details-title">
            <h2>Details</h2>
          </div>
    
          
          </div>

          <div class="details">


            <form action="transferprocess.php?id=<?php echo $id;?>&&token_id=<?php echo $token_id?>" method="post">
            <div><select name="employee_id">


            <?php

                include("../dao.php");

                $count = 1;
                $sql1 = "select department_id from employee_details where employee_id = '$id'";
                $result1 = mysqli_query($connection,$sql1);
                $department_id = mysqli_fetch_array($result1);
                $temp = $department_id['0'];
                $sql2 = "select employee_name,employee_id from employee_details where department_id = '$temp' and employee_id != '$id'";
                $result2= mysqli_query($connection,$sql2);

                while($row = mysqli_fetch_assoc($result2)) {
                    ?><option value="<?php echo $row['employee_id'];?>"><?php echo $row['employee_name'];?></option><?php
                }

                ?>

                
            </select></div>
            <div>
              <textarea rows="3" cols="70" name="documentcomment"></textarea>
            </div>

            <div>
              <button class="btna green-btna" type="submit">Submit</button>
                <a href="pendinge.php?id=<?php echo $id;?>">
                  <button type="button" class="btna red-btna">Cancel</button>
                </a>
            </div>

            </form>

        </div>
      </div>
    </div>
  </section>

</body>
</html>
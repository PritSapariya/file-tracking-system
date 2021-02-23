  <?php include("headerd.php");?>

  <link rel="stylesheet" href="assets/css/basicd.css" />
    
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
        <?php include("menud.php");?>
    </section>

    <section>
      <h1>Dashboard</h1>
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
          <div class="info-title">
            <h2>New Entry</h2>
          </div>

          <form action="registrationprocess.php?id=<?php echo $id?>" method="post" class="info-body">
            <div class="info-item">
              <span>
                Name :
                <input type="text" style="width:40%;" required name="name">
              </span>
              <span class="seperator">
                Work :
                <select name="departmentid" required>
                  <option value="2">Aadhar card</option>
                  <option value="3">Income certificate</option>
                  <option value="4">Marriage certificate</option>
                  <option value="5">Voter ID</option>
                </select>
              </span>
              </div class="info-item">

            <div class="info-item">
            <span>
                Contact no. :
                <input type="text" style="width:34%;" name="number" pattern="[0-9]{10}" requireds>
            </span>
            

            </div>

            <div class="info-item">
              E-mail :
              <input type="email" style="width:40%;" name="mailid" required >
            </div>
            
            <div class="info-item">
              Address :<br>
              <textarea rows=2 cols="80" placeholder="204, IT dept, ADIT, New vvnagar." name="address" required ></textarea>
            </div>
                
            <div class="info-item">
            <span>
              <input type="radio" name="status" checked value="Accepted">
              Accept
            </span>
            
            <span class="seperator">
              <input type="radio" name="status" value="Rejected">
              Reject
            </span>
            
            </div>
            <div>
              <div class="info-btn">
              <span>
                <button type="submit" class="btna green-btna">Save</button>
              </span>
              <span class="seperator">
                <button type="reset" class="btna green-btna">Reset</button>
              </span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

</body>
</html>
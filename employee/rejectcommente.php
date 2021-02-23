<?php include("headere.php");?>

<link rel="stylesheet" href="assets/css/basice.css" />

</head>

<body>

  <section>
      <?php include("menue.php");?>
  </section>
  
  <?php
  $token_id = $_REQUEST['token_id'];
  $id = $_REQUEST['id'];
  
  ?>

  <section>
    <h1>Rejected Files</h1>
    <div class="container">
      <div class="operations">
        <ul>
          <li>Operations</li>
        </ul>
        <div class="op-items"><a href="indexe.php?id=<?php echo $id;?>">Dashboard</a></div>
        <div class="op-items"><a href="alle.php?id=<?php echo $id;?>">All files</a></div>
        <div class="op-items"><a href="recente.php?id=<?php echo $id;?>">Recent files</a></div>
        <div class="op-items"><a href="pendinge.php?id=<?php echo $id;?>">Pending files</a></div>
        <div class="op-items"><a href="transferede.php?id=<?php echo $id;?>">Transferred files</a></div>
        <div class="op-items"><a href="completede.php?id=<?php echo $id;?>">Completed files</a></div>
        <div class="op-items"><a href="rejectede.php?id=<?php echo $id;?>">Rejected files</a></div>
      </div>

      <div class="info">

        <div class="details-title">
          <h2>Comment</h2>
        </div>
    
        <div class="details">
            <form action="rejectprocess.php?token_id=<?php echo $token_id?>&&id=<?php echo $id?>" method = "post">
            <div>
                Description :<br>
                <textarea rows=3 cols=70 placeholder="reason" name="documentcomment"></textarea>
            </div>
            <div>
                    <button type="submit" class="btna green-btna">Go</button>
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
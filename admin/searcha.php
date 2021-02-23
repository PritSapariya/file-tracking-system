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
    width: 25rem;
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
    margin: 0px 0px 20px 110px;
  }


</style>

</head>

<body>

  <section>
      <?php include("menua.php");?>
  </section>

  <section>
    <h1>Search File</h1>
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
        <div class="info-title">
          <h2>Search</h2>
        </div>
      <?php  $X='0' ?>
      <fom>
        <div class="info-body">
          <div class="info-item">
            <input type="radio" name="point" value="1" onclick="document.getElementById('b_date').style.display='none'"checked>Before<?php $X ='1' ?>
            <input type="radio" name="point" value="2" onclick="document.getElementById('b_date').style.display='none'">After<?php $X ='2' ?>
            <input type="radio" name="point" value="3" onclick="document.getElementById('b_date').style.display='block'">Between<?php $X ='3' ?>
          </div>

          <div class="info-item">
            <h3>Enter dates</h3>
            <div>
              Date : 
              <input type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="YYYY-MM-DD" name="a_date">
            </div>
            <div id="b_date" style="display:none;"><?php if($X=='3'){ ?>
              <div>to</div>
              <div>Date : 
              <input type="text" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="YYYY-MM-DD" name="b_date">
              </div>
            <?php } ?>
            </div>
          </div>

          <div class="info-btn">
          <span>

            <button class="btna green-btna">Search</button>
          </span>
          </div>

        </div>
      </div>
    </div>
  </section>

<!-- <script>
    function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
</script> -->

</body>
</html>
    <?php include("header.php");?>

<style>

form {border: 3px solid #f1f1f1;}

.login-title {
    text-align: center;
    text-decoration: underline;
}

.button {
  background-color: #4CAF50;
  padding: 8px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  color: white;
  width: 75px;
  height: 40px;
}

.button:hover {
  opacity: 0.9;
}

.cancelbtn {
  width: auto;
  padding: 8px;
  background-color: #f44336;
}


.cancelbtn:hover {
  background-color: #f44336;
  opacity: 0.6;
}

.cancelbtn a {
  color: white;
  text-decoration: none;
}

.container {
  padding: 16px;
  margin: 10px 20%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
}

.input {
  border-radius : 10px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.login-form {
  border-radius : 20px;
  width: 430px;
  margin: auto;
  margin-bottom:40px;
}

.login-form-container {
  border: 3px solid #f1f1f1;
  border-radius:30px;
  margin: 20px;
  margin-top: 95px;
  margin-bottom: 55px;
}


</style>
</head>
<body>
  <?php include("navbar.php");?>

<div class="login-form-container">
<h2 class="login-title">Login</h2>

<form action="login-process.php" method="post" class="login-form">
  <div class="container">
    <?php
      if(isset($_GET['error'])){?>
      <div id="cross" style="height: 20px;border: 1px solid red; background-color: pink;display: flex; justify-content:space-between;border-radius:3px;">
        <div style="color:red;font-size:12px;"> *Invalid login.</div>
        <div onclick="document.getElementById('cross').style.display='none'" style="cursor:pointer;border: none;height:8px; width:16px;background-color: pink;color:red;">&times; </div>
      </div>
      <?php } ?>
    <label for="uname"><b>Username :</b></label>
    <input type="text" class="input" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password :</b></label>
    <input type="password" class="input" placeholder="Enter Password" name="password" required>
        
    <button type="submit" class="button"><strong>Login</strong></button>
    <a href="home.php">
      <button type="button" class="cancelbtn button"><strong>Cancel</strong></button>
    </a>
</div>
  
</form>
</div>

<br />
    <section>
        <?php include("footer.php");?>
    </section>
</body>
</html>

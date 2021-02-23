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
          <div class="info-title">
            
          </div>

          <form action="employeeregistration.php" method="post"class="info-body">
            <div class="info-item">
              Name :
                <input type="text" style="width:40%;" name="employeename">
            </div class="info-item">

            <div class="info-item">
              <span>
                Contact no. :
                <input type="nummber" name="employeenumber">
              </span>
              <span class="seperator">
                Gender :
                <input type="radio" name="gender" value="M" checked>Male
                <input type="radio" name="gender" value="F">Female
                <input type="radio" name="gender" value="O">Other
              </span>
            </div>

            <div class="info-item">
              E-mail :
              <input type="email" style="width:40%;" name="employeemailid">
            </div>
            
            <div class="info-item">
                Department :
                <select name="department">
                  <option value="Data Handler">Data Handler</option>
                  <option value="Aadhar card">Aadhar Card</option>
                  <option value="Income Certificate">Income Certificate</option>
                  <option value="Passport">Passport</option>
                  <option value="Voter ID">Voter ID</option>
                </select>

              <span class="seperator">
                Designation :
                  <select name="designation">
                    <option value="clerk">Clerk</option>
                    <option value="officer">Officer</option>
                    <option value="HOD">HOD</option>
                  </select>
              </span>
            </div>
            
            <div class="info-item">
              Address :<br>
              <textarea rows=2 cols="80" placeholder="204, IT dept, ADIT, New vvnagar." name="employeeaddress"></textarea>
            </div>

            <div class="info-item">
              PIN :
              <input type="number" name="pincode" maxlength="6">
            </div>
            
            <div class="info-item">
              <span>
                Username :
                <input type="text" name="username">
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
              <button type="submit" class="btna green-btna">Save</button>
            </span>
            <span class="seperator">
              <button type="reset" class="btna green-btna">Reset</button>
            </span>
            </div>

          </form>
        </div>
      </div>
    </section>

</body>
</html>
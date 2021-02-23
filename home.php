`<?php include("header.php");?>

<style>

  html {
    scroll-behavior: smooth;
  }
  </style>
  <?php 
  if(isset($_GET['error'])){?>
  #id01 {
    display:block;
  }
  <?php } ?>

</style>

</head>
<body id="myPage">
<?php include("navbar.php");?>

`<!-- Image Header -->````
`<div class="w3-display-container w3-animate-opacity">
  <img src="resources\assets\images\WhatsApp Image 2020-02-20 at 5.56.42 PM.jpeg" alt="boat" style="width:100%;">
  <section>
    <div class="w3-container w3-display-topright w3-margin-top" style="position:fixed; top:50px; right: 30px;">  
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Track your file">Track File</button>
    </div>
  </section>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4" style="width:600px;">
  <form action="status.php" method="post">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Checking status of your file is much easier..!</h4>
      <h5>Just fill the details below</h5>
    </header>
    <div style="margin:10px;"><?php 
  if(isset($_GET['error'])){?>
  Invalid information.
  <?php } ?></div>
    <div class="w3-container">
      <p>Mobile no.:
        <input type="text" name="contact" pattern="[0-9]{10}"required>
      </p>
      <p>Token no. :
        <input type="text" name="token" required>
      </p>
    </div>
    <footer class="w3-container w3-teal">
      <p>and click<button type="submit" class="w3-button" style="background-color:black; border-radius:10px; margin:0px 0px 0px 30px;">Go</button></p>
    </footer>
    </form>
  </div>
</div>

<!-- WHY FTS Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="why">

<div class="w3-quarter">
<h2>Why FTS?</h2>
<ul>
        <li>No more lost files or documents.</li>   
        <li>Improved access control.</li>
        <li>Faster, easier access to files.</li>
        <li>Better security.</li>
        <li>Chain of custody of files and documents.</li>
        <li>Suitable for any government organization.</li>
        <li>Streamlines your processes.</li>
        <li>Saves time and money.</li>
        <li>Making the organization efficient.</li>
        
    </ul>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="resources\assets\images\WhatsApp Image 2020-02-22 at 11.15.55 AM.jpeg" alt="File" style="width:100%">
  <div class="w3-container">
 
  <h2 style="font-size:1.5rem;">
 <p>A fast, secure and reliable way to unseal the concealed!</p></h2>


  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="resources\assets\images\WhatsApp Image 2020-02-22 at 11.15.53 AM.jpeg" alt="Track" style="width:100%">
  <div class="w3-container">
  
  <h2 style="font-size:1.5rem;">
  <p>Enervating wait!?
     Here’s an instant solution to trace your files with an easier access than ever!</p></h2>
   
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="resources\assets\images\WhatsApp Image 2020-02-22 at 11.15.54 AM.jpeg" alt="Search" style="width:100%">
  <div class="w3-container">

  <h2 style="font-size:1.5rem;">
  <p>You're just a few steps away from unlocking the transparency</p></h2>
  </div>
  </div>
</div>

</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p><a href="https://www.google.com/maps/place/A.+D.+Patel+Institute+of+Technology,+New+Vallabh+Vidyanagar/@22.5209808,72.9167489,17.22z/data=!4m5!3m4!1s0x395e4d93862df729:0xadbe2043bbfd455b!8m2!3d22.5215561!4d72.9164636" style="text-decoration: none;" target="_blank">
        <i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> A.D. Patel Institute of Technology, New Vallabh Vidyanagar,<br>Anand-388001, Gujarat, India.</a></p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9755548628</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> hackathon2728@gmail.com</p>
    </div>

    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="feedback_process.php" method="POST">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <button type="submit" class="w3-button w3-left w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php");?>`
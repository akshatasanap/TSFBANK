<!DOCTYPE html>
<html>
<title>TSF BANK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image:url(img/i4.jpg);
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}


</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-button w3-round-large" style="font-family:Times New Roman">THE SPARKS FOUNDATION BANK (TSF)</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    
      <a href="#about" class="w3-button w3-round-large" style="font-family:Times New Roman"><i class="fa fa-user"></i> ABOUT</a>
      <a href="transfer_money.php" class="w3-button w3-round-large" style="font-family:Times New Roman"><i class="fa fa-usd"></i> TRANSACTION</a>
      <a href="transfer_history.php" class="w3-button w3-round-large" style="font-family:Times New Roman"><i class="fa fa-th"></i> HISTORY</a>
      <a href="#contact" class="w3-button w3-round-large" style="font-family:Times New Roman"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">TRANSACTION</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">HISTORY</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small" style="font-family:cursive">Start online banking </span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"></span><br>
    <span class="w3-large"><h3>Stop wasting valuable time in bank for transactions.</h3></span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-round-xlarge w3-margin-top w3-opacity w3-hover-opacity-off"><strong>Learn more about TSF </strong></a></p>
  </div> 

</header>

<!-- About Section -->
<div class="w3-container" style="padding:100px 16px" id="about">
  <h1 class="w3-center">ABOUT THE TSF </h1>


<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>THE SPARKS FOUNDATION</h3>
      <p style="font-family:verdana">The Sparks Foundation Is Working To Bring Parity In Education, Making Sure Children Have Equal Opportunity At Success, Irrespective Of The Financial Background.TSF Organize Events, Allowing Students To Learn From The Masters In Their Fields. Get Inspired. Through Stories And Workshops, They Show Them Feasibility Of Big Dreams.TSF Conduct Internship Program To Help Students Be Ready For What Is Coming To Them In Their Career Ahead. They Help Students And Enable Them To Move Forward, Get Unstuck From Any Unfavorable Situation. TSF Keep An Alternative Channel Open Always To Help Them, When School And People Around Are Not Enough.TSF Connect Them To Available Resources. TSF Support Students When There Is None Available.TSF Provide Financial Assistance To Meritorious And Deserving Students. They Provide Prizes, Motivating Students To Bring Out Their Best.</p>
     
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round medium" src="img/a1.png" alt="Buildings" width="450px" height="100px">
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container w3-seashell" style="padding:100px 16px" id="contact">
  <h1 class="w3-center">CONTACT</h1>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> THE HANGAR, NUS ENTERPRISE
21 HENG MUI KENG TERRACE, SINGAPORE, 119613</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +65-8402-8590</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: info@thesparksfoundation.sg</p>
    <br>
    
    

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 
  <p>Powered by <a title="Web Development Intern at The Sparks Foundation" target="_blank" class="w3-hover-text-green">Akshata Sanap</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

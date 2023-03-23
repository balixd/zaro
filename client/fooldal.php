<style>
  span.bold {
  font-size: 60px;
  font-weight: 700; 
  color: purple;
}
h3{
  font-weight: bold;
}

</style>


<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">---</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Bezár <i class="fa fa-remove"></i></button>
  <a href="./index.php?prog=loginout/bejelentkezes.php" class="w3-bar-item w3-button">Bejelentkezés</a>
  <a href="./index.php?prog=loginout/regisztracio.php" class="w3-bar-item w3-button">Regisztráció</a>
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 

</nav>

<!-- Header -->
<header class="" id="myHeader" style="background-color:#270324;">
  <div class="w3-center" style="background-image: url(header2.png); background-size:100% 100%; background-repeat:no-repeat">
    <div class="w3-padding-32">
            <h1> <span class="bold">B</span><span style="color: darkgray">8</span></h1>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
</div>

<div class="w3-row w3-center w3-margin-top" style="background-image: url(ss4.png);" >
<div class="w3-third" >
  <div class="w3-card w3-container"  style="min-height:460px" >
  <h3>Snake</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
     <a href="./snake/snake.html"> <img src="kigyos.png" width="300px" height="300px" ></a>

    </i>

  </div>
</div>

<div class="w3-third"  >
  <div class="w3-card w3-container" style="min-height:460px" >
  <h3>Ping Pong</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
  <a href="./ping pong/pingpong.html"> <img src="pingpongos2.png" width="300px" height="300px" alt=""> </a></i>

  </div>
</div>

<div class="w3-third" >
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>2048</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
  <a href="./2048 2.0/2048/index.html"> <img src="2048f.png" width="300px" height="300px" alt=""> </a></i>
  </div>
</div>
</div>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>


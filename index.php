<!DOCTYPE html>
<html>
<style>


body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/wallpaper.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Arial", Arial, Arial;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}

</style>
<body>


<div class="bgimg">
  <div class="topleft">
    <p>Echo News!</p>
  </div>
  <div class="middle">
    <h1>Echo News. Coming soon. Join our discord for more info: https://discord.gg/kHSVFSy5FF</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p> Wallpaper By Big Sur Beta background.</p>
  </div>
</div>

<script>

var countDownDate = new Date("March 29, 2021 15:37:25").getTime();


var countdownfunction = setInterval(function() {

  var now = new Date().getTime();
  
  
  var distance = countDownDate - now;
  
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
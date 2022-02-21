
<!DOCTYPE html>
<html>
  <head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <?php include('B_users/header.html');?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>


<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> Bienvenu ici</h3>
    </div>
  </div>
</div>


<!-- <div>Nuru Banque</div> 
<div> 
  <span>A votre service</span>
</div>


<p>a css3 animation demo</p> -->






<!-- 
<div id="container">
    <span id="text1"></span>
    <span id="text2"></span>
</div>

<svg id="filters">
    <defs>
        <filter id="threshold">
            <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                  0 1 0 0 0
                  0 0 1 0 0
                  0 0 0 255 -140" />
        </filter>
    </defs>
</svg> -->





<center><div class="word" ></div></center>
<input type="text" name="" id="texti">


<!-- 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<div class="content">
  <div class="content__container">
    <p class="content__container__text">
    Nuru Banque
    </p>
    
    <ul class="content__container__list">
      <li class="content__container__list__item">Securise votre argent</li>
      <li class="content__container__list__item">Facilite vos payement</li>
      <li class="content__container__list__item">Faciclite de gerer vos fiances</li>
      <li class="content__container__list__item">OOO</li>
    </ul>
  </div>
</div> -->

<style>
  body {
  width: 100%;
  height: 100%;
  position: fixed;
  background-color: #34495e;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 35px;
  line-height: 40px;
  color: #ecf0f1;
}
.content__container {
  font-weight: 600;
  height: 40px;
  padding: 0 40px;
}
.content__container:before {
  content: "";
  left: 0;
}
.content__container:after {
  content: "";
  position: absolute;
  right: 0;
}
.content__container:after, .content__container:before {
  position: absolute;
  top: 0;
  color: #16a085;
  font-size: 42px;
  line-height: 40px;
  -webkit-animation-name: opacity;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-name: opacity;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
.content__container__text {
  display: inline;
  float: left;
  margin: 0;
}
.content__container__list {
  margin-top: 0;
  padding-left: 110px;
  text-align: left;
  list-style: none;
  -webkit-animation-name: change;
  -webkit-animation-duration: 10s;
  -webkit-animation-iteration-count: infinite;
  animation-name: change;
  animation-duration: 10s;
  animation-iteration-count: infinite;
}
.content__container__list__item {
  line-height: 40px;
  margin: 0;
}

@-webkit-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-webkit-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
</style>

</body>
</html>
<style>


@import url('https://fonts.googleapis.com/css?family=Roboto:300');

body {
  text-align:center;
  background:linear-gradient(141deg, #ccc 25%, #eee 40%, #ddd 55%);
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  padding-top:40vh;
  height:100vh;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

div {
  display:inline-block;
  white-space:nowrap;
}

div:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 7s infinite;
}

div:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

div:last-of-type span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}


p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}


  .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}



@import url("https://fonts.googleapis.com/css?family=Raleway:900&display=swap");

body {
    margin: 0px;
}

#container {
    position: absolute;
    margin: auto;
    width: 100vw;
    height: 80pt;
    top: 0;
    bottom: 0;

    filter: url(#threshold) blur(0.6px);
}

#text1,
#text2 {
    position: absolute;
    width: 100%;
    display: inline-block;

    font-family: "Raleway", sans-serif;
    font-size: 80pt;

    text-align: center;

    user-select: none;
}


html {
  height: 100%;
}
body {
  display: flex;
  height: 100%;
  background-color: #333;
}
.word {
  margin: auto;
  color: white;
  font: 700 normal 2.5em 'tahoma';
  text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324;
}

</style>
<script>
  const elts = {
    text1: document.getElementById("text1"),
    text2: document.getElementById("text2")
};

const texts = [
    "If",
    "You",
    "Like",
    "It",
    "Please",
    "Give",
    "a Love",
    ":)",
    "by @DotOnion"
];

const morphTime = 1;
const cooldownTime = 0.25;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = texts[textIndex % texts.length];
elts.text2.textContent = texts[(textIndex + 1) % texts.length];

function doMorph() {
    morph -= cooldown;
    cooldown = 0;

    let fraction = morph / morphTime;

    if (fraction > 1) {
        cooldown = cooldownTime;
        fraction = 1;
    }

    setMorph(fraction);
}

function setMorph(fraction) {
    elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    fraction = 1 - fraction;
    elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    elts.text1.textContent = texts[textIndex % texts.length];
    elts.text2.textContent = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
    morph = 0;

    elts.text2.style.filter = "";
    elts.text2.style.opacity = "100%";

    elts.text1.style.filter = "";
    elts.text1.style.opacity = "0%";
}

function animate() {
    requestAnimationFrame(animate);

    let newTime = new Date();
    let shouldIncrementIndex = cooldown > 0;
    let dt = (newTime - time) / 1000;
    time = newTime;

    cooldown -= dt;

    if (cooldown <= 0) {
        if (shouldIncrementIndex) {
            textIndex++;
        }

        doMorph();
    } else {
        doCooldown();
    }
}

animate();
</script>
<script>


var words = ['J\'aime ma banque', 'Retrait d\'argent facile'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
    $('#texti').value=part;
  },speed);
};

$(document).ready(function () {
  wordflick();
});


</script> 
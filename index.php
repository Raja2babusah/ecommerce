<style>
	.slider, 
.slider > div {
    /* Images default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 500px;
    /* height: 100vh; *//* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #fefefe;
    overflow: hidden;
    -moz-transition: transform .4s;
    -o-transition: transform .4s;
    -webkit-transition: transform .4s;
    transition: transform .4s;
}

.slider > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: .3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background:#fff;
    background: rgba(255, 255, 255, .8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: .3s;
    -o-transition: .3s;
    -webkit-transition: .3s;
    transition: .3s;
}

.slider > ul > .showli {
    background-color: #7EC03D;
    -moz-animation: boing .5s forwards;
    -o-animation: boing .5s forwards;
    -webkit-animation: boing .5s forwards;
    animation: boing .5s forwards;
}

.slider > ul > li:hover {
    background-color: #7EC03D;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: inline-block;
    background: rgba(0,0,0,.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: .3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider > div span {
    display: block;
    background: rgba(0,0,0,.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}


@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(.8);
    }
    100% {
        transform: scale(1);
    }
}

/* -------------------------------------- */

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}

.content {
    padding: 50px;
    margin-bottom: 100px;
}

html {
    height: 100%;
    box-sizing: border-box;
}
*, *:before, *:after {
    box-sizing: inherit;
}
h1, h2, h3 {
    font-family: 'Crimson Text', sans-serif;
    font-weight: 100;
}
body {
    font: 15px 'Titillium Web', Arial, sans-serif;
    background: radial-gradient(#121212, #000);
    height: 100%;
    color: #aaa;
    margin: 0;
    padding: 0;
}

.content {
    padding: 10px 15vw;
}

</style>


<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 

<!-- Slider 1 -->
<div class="slider" id="slider1">
    <!-- Slides -->
    <div style="background-image:url(https://th.bing.com/th/id/OIP.Om-W93myB1VEtPiMGI2nBwAAAA?w=279&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
    <div style="background-image:url(https://th.bing.com/th/id/OIP.lVzzbrJfiU196usUHe5fOQHaK-?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
    <div style="background-image:url(https://th.bing.com/th/id/OIP.Om-W93myB1VEtPiMGI2nBwAAAA?w=279&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
    <div style="background-image:url(https://th.bing.com/th/id/OIP.OKQOPX-3SkQxK3bfpM_zGAHaE8?w=294&h=196&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
    <div style="background-image:url(https://th.bing.com/th/id/OIP.Om-W93myB1VEtPiMGI2nBwAAAA?w=279&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
    <!-- Title Bar -->
    <span class="titleBar">
        <h1>Accessories </h1>
    </span>
</div>

<br>

<div class="row2Wrap">

    <div class="slider" id="slider2">

        <div style="background-image:url(https://th.bing.com/th/id/OIP.Om-W93myB1VEtPiMGI2nBwAAAA?w=279&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7)"></div>
        <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)"></div>
        <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)"></div>
        <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)"></div>

        <i class="left" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg> 
    </i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
    </i>
        <!-- Title Bar -->
        <!--     
        <span class="titleBar"> 
            <h1>I am like a leaf in the wind.</h1> 
            <p>Watch me soar!</p>
        </span> 
        -->
    </div>


    <!-- <h3>Individual slide text</h3> -->

    <!-- Slider 1 -->
    <div class="slider" id="slider3">
        <div style="background-image:url(data:image/jpeg;base64,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)">
            <span>
          <h2></h2>
      </span>
        </div>
        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5cBEHoSbLdCQ-eQXY8Zn33nqlzu6HNRoxxA&s)">
            <span>
          <h2></h2>
      </span>
        </div>
        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzqQdIfpCCemyHXOAPZ92OL0Hq3bsOpU9oZQ&s)">
            <span>
          <h2></h2>
      </span>
        </div>
        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
        <!-- Title Bar -->
        <!--     <span class="titleBar">
        <h1>I am like a leaf in the wind.</h1> 
        <p>Watch me soar!</p>
    </span> -->
    </div>

</div>     
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

<script>
	
(function($) {
  "use strict";
  $.fn.sliderResponsive = function(settings) {
    
    var set = $.extend( 
      {
        slidePause: 5000,
        fadeSpeed: 800,
        autoPlay: "on",
        showArrows: "off", 
        hideDots: "off", 
        hoverZoom: "on",
        titleBarTop: "off"
      },
      settings
    ); 
    
    var $slider = $(this);
    var size = $slider.find("> div").length; //number of slides
    var position = 0; // current position of carousal
    var sliderIntervalID; // used to clear autoplay
      
    // Add a Dot for each slide
    $slider.append("<ul></ul>");
    $slider.find("> div").each(function(){
      $slider.find("> ul").append('<li></li>');
    });
      
    // Put .show on the first Slide
    $slider.find("div:first-of-type").addClass("show");
      
    // Put .showLi on the first dot
    $slider.find("li:first-of-type").addClass("showli")

     //fadeout all items except .show
    $slider.find("> div").not(".show").fadeOut();
    
    // If Autoplay is set to 'on' than start it
    if (set.autoPlay === "on") {
        startSlider(); 
    } 
    
    // If showarrows is set to 'on' then don't hide them
    if (set.showArrows === "on") {
        $slider.addClass('showArrows'); 
    }
    
    // If hideDots is set to 'on' then hide them
    if (set.hideDots === "on") {
        $slider.addClass('hideDots'); 
    }
    
    // If hoverZoom is set to 'off' then stop it
    if (set.hoverZoom === "off") {
        $slider.addClass('hoverZoomOff'); 
    }
    
    // If titleBarTop is set to 'on' then move it up
    if (set.titleBarTop === "on") {
        $slider.addClass('titleBarTop'); 
    }

    // function to start auto play
    function startSlider() {
      sliderIntervalID = setInterval(function() {
        nextSlide();
      }, set.slidePause);
    }
    
    // on mouseover stop the autoplay
    $slider.mouseover(function() {
      if (set.autoPlay === "on") {
        clearInterval(sliderIntervalID);
      }
    });
      
    // on mouseout starts the autoplay
    $slider.mouseout(function() {
      if (set.autoPlay === "on") {
        startSlider();
      }
    });

    //on right arrow click
    $slider.find("> .right").click(nextSlide)

    //on left arrow click
    $slider.find("> .left").click(prevSlide);
      
    // Go to next slide
    function nextSlide() {
      position = $slider.find(".show").index() + 1;
      if (position > size - 1) position = 0;
      changeCarousel(position);
    }
    
    // Go to previous slide
    function prevSlide() {
      position = $slider.find(".show").index() - 1;
      if (position < 0) position = size - 1;
      changeCarousel(position);
    }

    //when user clicks slider button
    $slider.find(" > ul > li").click(function() {
      position = $(this).index();
      changeCarousel($(this).index());
    });

    //this changes the image and button selection
    function changeCarousel() {
      $slider.find(".show").removeClass("show").fadeOut();
      $slider
        .find("> div")
        .eq(position)
        .fadeIn(set.fadeSpeed)
        .addClass("show");
      // The Dots
      $slider.find("> ul").find(".showli").removeClass("showli");
      $slider.find("> ul > li").eq(position).addClass("showli");
    }

    return $slider;
  };
})(jQuery);


 
//////////////////////////////////////////////
// Activate each slider - change options
//////////////////////////////////////////////
$(document).ready(function() {
  
  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
  
  $("#slider2").sliderResponsive({
    fadeSpeed: 300,
    autoPlay: "off",
    showArrows: "on",
    hideDots: "on"
  });
  
  $("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });
  
}); 



</script>
</body>
</html>
<html>
</head>
<title>Home Page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="Home_page_nav"/>
<link rel="stylesheet" type="text/css" href="topnav.css"/>
<link rel="stylesheet" type="text/css" href=Home_content.css>
<style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</style>

</head>
<header>
  <?php include 'navigation_test.php';?>
</header>
<body>
<!--
  -->
  <h2><quote></quote></h2>
<p></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 12</div>
  <img src="image/img3.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="image/img1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 12</div>
  <img src="image/img2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 12</div>
  <img src="image/img4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 12</div>
  <img src="image/img5.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 12</div>
  <img src="image/img6.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 12</div>
  <img src="image/img7.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 12</div>
  <img src="image/img8.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 12</div>
  <img src="image/img9.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 12</div>
  <img src="image/img10.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 12</div>
  <img src="image/img11.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">12 / 12</div>
  <img src="image/img2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>
<br>
<br>
 <br>
 <div class="container" style="text-align: justify">
     <p>An electronic book (or e-book or eBook) is a book publication made available in digital form, consisting of text, images, or both, readable on the flat-panel display of computers or other electronic devices.[1] Although sometimes defined as "an electronic version of a printed book",[2] some e-books exist without a printed equivalent. E-books can be read on dedicated e-reader devices, but also on any computer device that features a controllable viewing screen, including desktop computers, laptops, tablets and smartphones.

 In the 2000s, there was a trend of print and e-book sales moving to the Internet[citation needed], where readers buy traditional paper books and e-books on websites using e-commerce systems. With print books, readers are increasingly browsing through images of the covers of books on publisher or bookstore websites and selecting and ordering titles online; the paper books are then delivered to the reader by mail or another delivery service. With e-books, users can browse through titles online, and then when they select and order titles, the e-book can be sent to them online or the user can download the e-book.[3] At the start of 2012 in the U.S., more e-books were published online than were distributed in hardcover.[4]
 </p>
     <div class="parallax">

     </div>
     <p>The main reasons for people buying e-books online are possibly lower prices, increased comfort (as they can buy from home or on the go with mobile devices) and a larger selection of titles.[5] With e-books, "[e]lectronic bookmarks make referencing easier, and e-book readers may allow the user to annotate pages." [6] "Although fiction and non-fiction books come in e-book formats, technical material is especially suited for e-book delivery because it can be [electronically] searched" for keywords. In addition, for programming books, code examples can be copied.[6] The amount of e-book reading is increasing in the U.S.; by 2014, 28% of adults had read an e-book, compared to 23% in 2013. This is increasing, because by 2014 50% of American adults had an e-reader or a tablet, compared to 30% owning such devices in 2013.[7]
 </p>
   </div>
</body>

</html>

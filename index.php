<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Malina Inc</title>
<!-- JavaScript Bundle with Popper -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>

body {
	min-width: 16%!important;
	height: auto;
}

#header {
	min-width: 16%!important;
	height: auto;
}

.navbar-nav {
	min-width: 16%!important;
	height: auto;
}

.navbar-nav .nav-link {
	color: black;
	min-width: 16%!important;
	font-size: auto;}

.navbar-nav .nav-link:hover {
	color: #dc3545;
	font-size: auto;}

.btn-outline-light {
	color: #dc3545;
	background-color: #ffffff;
	border-color: #000000;}

.btn-outline-light:hover{background-color: red !important}

.navbar-brand {
	background-color: rgba(255,255,255,1)!important;
	border-radius: 3px;
	color: #dc3545 !important; }

.navbar-toggler:hover {
	color: red !important;}

.navbar-toggler:focus: {
color: white !important;}

.dropdown-menu {
	  /* metade transparente: alpha = .5 */
	  background-color: rgba(255, 255, 255, .5) !important;}

.navbar .navbar-collapse { 
		  background-color: rgba(255,255,255,0.9) !important; 
	text-align: center !important; }

.navbar-collapse {
	font-style: bold !important;
	color: #000 !important;}

.navbar-collapse:hover {
	color: #000;
	font-style: bold !important;}

.dropdown-menu a:hover{
 background: #dc3545 !important;
 background: linear-gradient(left, #dc3545, #FFF);
 background: -moz-linear-gradient(left, #dc3545, #FFF)!important;
 background: -webkit-gradient(linear, 100% 50%, 0% 0%, from(#dc3545), to(#FFF))!important;
 -webkit-transition: all 0.2s ease-in-out;
 -moz-transition: all 0.2s ease-in-out;
 transition: all 0.2s ease-in-out; }

.form-control {
	color: white;
	border-color: grey;}

.form-control:focus {
  border-color: red;
  box-shadow: inset 0 0px 1px rgba(145, 33, 33, 1), 0 0 2px rgba(163, 11, 18, 1);}

.container1 {
	text-align: center !important;
	position: relative;
margin-left: auto!important;
margin-right: auto!important;
	}


#hero {
	width: 100%;
	height: 100vh;
	background: url(https://sun9-73.userapi.com/impf/cIIUx9AyqFlMaeMQYvkwcEAio_6Wb_DVrRb6xg/nsWkQV1A5xs.jpg?size=800x600&quality=95&sign=bd03d83d5184b2c19068c85caf5d4e4f&type=album);
    background-repeat: no-repeat;
	background-position: left!important;
	position: relative;
	text-align: center!important;
	margin-left: auto!important;
    margin-right: auto!important;}

#hero::before {
	content:"";
	position: absolute;
	bottom: 0;
	top: 0;
	left: 0;
	right: 0;
	background: rgba(255,255,255,0.5)}

#hero .h1 {
	position: fixed top center;
	margin: 0;
	font-size: 56px!important;
	font-weight: 700!important;
	line-height: 64px!important;
	color: #000!important;
	font-family: "Poppins", sans-serif !important;
	text-align: center!important;}

#hero .h2 {
	color: #000!important;
	margin: 10px 0 0 0 !important;
	font-size: 24px;
	text-align: center !important;}

.icon-box {
	padding: 30px 60px;
	border: 1px solid rgba(255,255,255,0.3);
	border-radius: 20px;
	height: 100%;
	left: 50%;
    margin-left: auto!important;
margin-right: auto!important;
	text-align: center!important;}

.bi-github:hover {
	fill: #dc3545 !important;}

#hero .icon-box h3{
	font-weight: 700;
	margin-top: 10px;
	padding: 0;
	font-size: 20px;
	line-height: 26px;
	text-align: center!important;}

#hero .icon-box h3 a{
	color: #000;
	text-decoration: none !important;
	text-align: center!important;}

#hero .icon-box h3 a:hover{
	color: #dc3545;}

.icon-box:hover {
	border-color: rgba(2,2,2,0.4);
	border-radius: 20px;}

.bi-check-square-fill:hover {
	fill: #dc3545 !important;}

.cta {
	text-align: center!important;
	background: linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)), url(https://sun9-26.userapi.com/impf/6jpULbQcXC57T0Ozsa07Tfhf5drFPgnnjOg0FA/Bj-1h6uDJec.jpg?size=800x600&quality=95&sign=fba77c938b79a2cfa2caef112c13ce7a&type=album) fixed center center;
	padding: 40px 0;
	color: #000;}

.cta h3{
	font-weight: 700!important;
	font-size: 28px!important;}

.cta-btn {
	background-color: rgba(255,255,255,0.8);
	font-weight: 600;
	font-size: 16px;
	letter-spacing: 1px;
	display: inline-block;
	padding: 8px 28px;
	text-decoration: none !important;
	color: #000;
	border: 2px solid #000;
	border-radius: 20px;
	margin-top: 10px;}

.cta-btn:hover{
  background-image: linear-gradient(to right,rgba(220, 53, 69, 1),rgba(2,2,2,0.2));
  color: #fff;
  box-shadow: 4px 5px 27px 4px rgba(255,255,255,0.8);
  transition: background-image .3s linear;
  transition: box-shadow .3s linear;}

#Slider {
	width: 800px;
	height: auto;
	max-width: 1200px;
	min-width: 320px;
	position: relative;
margin-left: auto!important;
margin-right: auto!important;
padding-bottom: 300px;
list-style-type: none;
}

}
  #slides {
 position: relative;
margin-left: auto!important;
margin-right: auto!important;
 list-style-type: none;
 background-size: contain;
 object-fit: contain;
}

.slide {
	object-fit: contain;
 position: absolute;
 margin-left: auto!important;
margin-right: auto!important;
list-style-type: none;
background-size: contain;
 left: 0px;
 top: 0px;
 opacity: 0;
 z-index: 1;

 -webkit-transition: opacity 1s;
 -moz-transition: opacity 1s;
 -o-transition: opacity 1s;
 transition: opacity 1s;
}

.slide img {
	width: 100%;
    height: auto;
	object-fit: contain;
}

.showing {
 opacity: 1;
 z-index: 2;
}

@media only screen and (min-width: 320px) { #Slider {
	width: 320px; } }
@media only screen and (max-width: 500px) { #Slider {
	width: 320px; } }
@media only screen and (min-width : 1024px) { #Slider {
	width: 600px; } }


</style>
</head>

<body>
<header id="header" class="fixed-top">
<nav class="navbar navbar-light navbar-expand-lg navbar-expand-sm navbar-custom">
<div class="container">
<a href="http://marinamalina.com/" class="navbar-brand" >
<img src="https://i.yapx.ru/QiH40.gif" alt="" 
width="32" height="32" class="d-inline-block align-text-top">
Malina Inc
</a> 

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
data-bs-target="#navContent" aria-controls="navcontent" 
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
</span>
</button>

<div class="collapse navbar-collapse" id="navContent">

<ul class="navbar-nav ms-auto me-auto mb-lg-0 mb-sm-0">
<li class="nav-item">
<a href="http://marinamalina.com/" class="nav-link">Home</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">Blog</a>
</li>
<li class="nav-item">
<a href="#about" class="nav-link">About</a>
</li>

<li class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" 
aria-expanded="false">
Portfolio</a>

<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li> <a href="#Slider" class="dropdown-item">Visual Art</a></li>
<li> <a href="#" class="dropdown-item">WWW</a></li>
<li> <a href="#" class="dropdown-item">TXT</a></li>
</ul>
</li>
</ul>

<form action="#" class="d-flex">
<input type="search" placeholder="Let's surf!" class="form-control me-2">
<button type="submit" class="btn btn-outline-light">Search</button>
</form>
</div>
</div>
</nav>
</header>
<section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container1">
<div class="row justify-content-center">
<div class="col-md-6 col-lg-8 col-sm-6 mt-5">
<h1> WEB DEVELOPMENT  </h1>
<h2> Customized Web Development Strategy For Your Business </h2>
	</div>
	</div>
	<div class="row mt-5 justify-content-center">
	<div class="col-xl-2 col-md-4 col-6">
	<div class="icon-box">
	<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="#000" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
  <use xlink:href="http://marinamalina.com/images/fox.svg"/></svg>
<h3><a href="www.marinamalina.com">develop</a></h3>
	</div>
	</div>
	<div class="col-xl-2 col-md-4 col-6">
	<div class="icon-box">
	<a href="#Slider"><svg xmlns="http://www.w3.org/2000/svg" href="#Slider" width="3em" height="3em" fill="#000" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></a>
<h3><a href="#Slider">visual</a></h3>
	</div>
	</div>
	<div class="col-xl-2 col-md-4 col-6">
	<div class="icon-box">
	<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="#000" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
<h3><a href="#">.txt</a></h3>
	</div>
	</div>
	<div class="col-xl-2 col-md-4 col-6">
	<div class="icon-box">
	<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="#000" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>
<h3><a href="#">.audio</a></h3>
	</div>
	</div>
	</div>
	</div>
</section>

<section class="about my-5" id="about">
<div class="container">
<div class="row">
<div class="col-lg-6 order-1 order-lg-2">
<img class="img-fluid" src="https://cdn3.savepice.ru/uploads/2022/2/9/6bbac6e80480dd52be9bb55576744274-full.png" alt="">
</div>
<div class="col-lg-6 pt-5 mt-4 pt-lg-0 order-2 order-lg-1 content">
<h3> Malina Inc </h3>
<p class="fst-italic">Customized Web Development Strategy For Your Business</p>
<ul>
<li> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg> Web Design Solutions
</li>
<li> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg> Digital and Hand-drawn Graphic Art and Illustration
</li>
<li> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg> Digital Marketing Strategy / Copywriting/ SEO
</li>
<li> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg> Songwriting / Arrangement
</li>
</ul>
<p class="fst-italic"> Serving any type of business: Art, HR, Business, Development, Technology, Fashion, Film Technology and etc. </p>
</div>
</div>
</div>
</section>
<section class="cta mb-5">
<div class="container">
<h3> Need a project? </h3>
<p class="fst-italic"> Get in touch! </p>
<a href="https://t.me/v01d01t" class="cta-btn">CONTACT ME</a>
</div>
</section>


<section class="about my-5" id="Slider">
<div class="container">
<div class="row">
<div class="col-lg-6 order-1 order-lg-2">
<ul id="slides">
 <li class="slide showing"> <img src="http://marinamalina.com/images/photo%20portgolio/ill_0.jpg"  class="img-fluid"> </li>
 <li class="slide"> <img src="http://marinamalina.com/images/photo%20portgolio/ill_5.jpg"  class="img-fluid"></li>
 <li class="slide"><img src="http://marinamalina.com/images/photo%20portgolio/ill_7.jpg"  class="img-fluid"></li>
 <li class="slide"><img src="http://marinamalina.com/images/photo%20portgolio/ill_10.jpg" class="img-fluid"></li>
 <li class="slide"><img src="http://marinamalina.com/images/photo%20portgolio/ill_1.jpg" class="img-fluid"></li>
</ul>
</div>
</div>
</div>
</section>

<div class='container'>
<div class='row justify-content-center'>
<div class='col'>
</div>
<div class='col'>
<h1 class='text-red text-center mt-9' >MALICE!</h1></div><div class='col'>
</div>
</div>
</div>

<div class='container'>
<div class='row'>
<div class='col'>
</div>
<div class='col'>
<h1 class='text-red text-center mt-1' >...</h1></div><div class='col'>
</div>
</div>
</div>

<img src="/images/fox.svg" alt="Bootstrap" width="32" height="32">


<script type="text/javascript">
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,1500);

function nextSlide() {
 slides[currentSlide].className = 'slide';
 currentSlide = (currentSlide+1)%slides.length;
 slides[currentSlide].className = 'slide showing';
}
</script>

</body>
</html>

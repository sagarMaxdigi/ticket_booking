<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Creating Fixed Header and Footer with CSS</title>
<style type="text/css">
    body{ padding-top: 60px;padding-bottom: 40px;}
    .container{ width: 80%; margin: 0 auto;}
    .fixed-header, .fixed-footer{width: 100%;position: fixed;background: #333;padding: 10px 0;color: #fff;}
    .fixed-header{top: 0;}
    .fixed-footer{bottom: 0;}
    nav a:hover{background-color: yellow;}
    nav a{color: #fff;text-decoration: none;padding: 7px 25px;display: inline-block;}
    .container p{line-height: 200px; }
    /*.container #home table tr td img{margin-top: -19px;margin-left: -132px; width: 1333px;height: 51%;}*/
/* Slider */
.slick-slider
{
	position: relative;
	display: block;
	box-sizing: border-box;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-touch-callout: none;
	-khtml-user-select: none;
	-ms-touch-action: pan-y;
	touch-action: pan-y;
	-webkit-tap-highlight-color: transparent;
}

.slick-list
{
	position: relative;
	display: block;
	overflow: hidden;
	margin: 0;
	padding: 0;
}
.slick-list:focus
{
	outline: none;
}
.slick-list.dragging
{
	cursor: pointer;
	cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
	-webkit-transform: translate3d(0, 0, 0);
	-moz-transform: translate3d(0, 0, 0);
	-ms-transform: translate3d(0, 0, 0);
	-o-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

.slick-track
{
	position: relative;
	top: 0;
	left: 0;
	display: block;
}
.slick-track:before,
.slick-track:after
{
	display: table;
	content: '';
}
.slick-track:after
{
	clear: both;
}
.slick-loading .slick-track
{
	visibility: hidden;
}

.slick-slide
{
	display: none;
	float: left;
	height: 100%;
	min-height: 1px;
}
[dir='rtl'] .slick-slide
{
	float: right;
}
.slick-slide img
{
	display: block;
}
.slick-slide.slick-loading img
{
	display: none;
}
.slick-slide.dragging img
{
	pointer-events: none;
}
.slick-initialized .slick-slide
{
	display: block;
}
.slick-loading .slick-slide
{
	visibility: hidden;
}
.slick-vertical .slick-slide
{
	display: block;
	height: auto;
	border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
	display: none;
}
.slick-prev,
.slick-next {
	position: absolute;
	display: block;
	width: 60px;
	height: 100px;
	cursor: pointer;
	background: transparent;
	top: 50%;
	margin-top: -45px;
	font-size: 0;
	border: none;
	z-index: 2;
}
.slick-prev:before,
.slick-next:before,
.slick-prev:after,
.slick-next:after {
	content: '';
	position: absolute;
	background: #fff;
	height: 2px;
	width: 50px;
	top: 50%;
	left: 5px;
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.slick-prev:before,
.slick-next:before {
	margin-top: -22px;
}
.slick-prev:after,
.slick-next:after {
	margin-top: 22px;
	margin-top: 2.2rem;
}
.slick-prev:hover:before,
.slick-next:hover:before {
	margin-top: -18px;
	margin-top: -1.8rem;
}
.slick-prev:hover:after,
.slick-next:hover:after {
	margin-top: 18px;
	margin-top: 1.8rem;
}
.slick-prev {
	left: -7px;
	left: -0.7rem;
}
.slick-prev:before {
	-webkit-transform: rotate(-60deg);
	-ms-transform: rotate(-60deg);
	transform: rotate(-60deg);
}
.slick-prev:after {
	-webkit-transform: rotate(60deg);
	-ms-transform: rotate(60deg);
	transform: rotate(60deg);
}
.slick-prev:hover:before {
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.slick-prev:hover:after {
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
.slick-next {
	right: -7px;
	right: -0.7rem;
}
.slick-next:before {
	-webkit-transform: rotate(60deg);
	-ms-transform: rotate(60deg);
	transform: rotate(60deg);
}
.slick-next:after {
	-webkit-transform: rotate(-60deg);
	-ms-transform: rotate(-60deg);
	transform: rotate(-60deg);
}
.slick-next:hover:before {
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
.slick-next:hover:after {
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.ct-slick-arrows--type2 .slick-prev,
.ct-slick-arrows--type2 .slick-next {
	opacity: 0.85;
	filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=85);
	-webkit-transition: all 250ms ease-in-out;
	transition: all 250ms ease-in-out;
}
.ct-slick-arrows--type2 .slick-prev:before,
.ct-slick-arrows--type2 .slick-next:before,
.ct-slick-arrows--type2 .slick-prev:after,
.ct-slick-arrows--type2 .slick-next:after {
	background-color: #fff;
	height: 15px;
	height: 1.5rem;
	width: 70px;
	width: 7rem;
}
.ct-slick-arrows--type2 .slick-prev:before,
.ct-slick-arrows--type2 .slick-next:before {
	margin-top: -20px;
	margin-top: -2rem;
}
.ct-slick-arrows--type2 .slick-prev:after,
.ct-slick-arrows--type2 .slick-next:after {
	margin-top: 20px;
	margin-top: 2rem;
}
.ct-slick-arrows--type2 .slick-prev:hover:before,
.ct-slick-arrows--type2 .slick-next:hover:before {
	margin-top: -20px;
	margin-top: -2rem;
}
.ct-slick-arrows--type2 .slick-prev:hover:after,
.ct-slick-arrows--type2 .slick-next:hover:after {
	margin-top: 20px;
	margin-top: 2rem;
}
.ct-slick-arrows--type2 .slick-prev:hover:active,
.ct-slick-arrows--type2 .slick-next:hover:active {
	opacity: 1;
	filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
}
.ct-slick-arrows--type2 .slick-prev {
	left: 10px;
	left: 1rem;
}
.ct-slick-arrows--type2 .slick-prev:before {
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.ct-slick-arrows--type2 .slick-prev:after {
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
.ct-slick-arrows--type2 .slick-prev:hover:before {
	margin-top: -27px;
	margin-top: -2.7rem;
	-webkit-transform: rotate(-60deg);
	-ms-transform: rotate(-60deg);
	transform: rotate(-60deg);
}
.ct-slick-arrows--type2 .slick-prev:hover:after {
	margin-top: 27px;
	margin-top: 2.7rem;
	-webkit-transform: rotate(60deg);
	-ms-transform: rotate(60deg);
	transform: rotate(60deg);
}
.ct-slick-arrows--type2 .slick-next {
	right: 10px;
	right: 1rem;
}
.ct-slick-arrows--type2 .slick-next:before,
.ct-slick-arrows--type2 .slick-next:after {
	left: auto;
	right: 0;
}
.ct-slick-arrows--type2 .slick-next:before {
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
.ct-slick-arrows--type2 .slick-next:after {
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.ct-slick-arrows--type2 .slick-next:hover:before {
	margin-top: -27px;
	margin-top: -2.7rem;
	-webkit-transform: rotate(60deg);
	-ms-transform: rotate(60deg);
	transform: rotate(60deg);
}
.ct-slick-arrows--type2 .slick-next:hover:after {
	margin-top: 27px;
	margin-top: 2.7rem;
	-webkit-transform: rotate(-60deg);
	-ms-transform: rotate(-60deg);
	transform: rotate(-60deg);
}
#home.ct-header.ct-header--slider {
	background-size: cover;
}
.ct-header .ct-slick {
	margin-bottom: 0;
}
.slick-initialized .slick-slide {
	display: block;
}
.ct-u-display-tablex {
	display: table;
	width: 100%;
	height: 600px;
}
.ct-u-display-tablex > .inner {
	display: table-cell;
	width: 100%;
	vertical-align: middle;
}
.ct-header h1.big {
	font-size: 6.7rem;
	line-height: 1;
	color: #fff;
	font-family: 'Open Sans Condensed', sans-serif;
	font-weight: 700;
	padding-top: 50px;
}
.ct-header p {
	font-size: 2.3rem;
	line-height: 1.1;
	margin: 30px 0 40px;
	color: #fff;
}
.btn {
	text-transform: uppercase;
    font-weight: bold;
    padding: 15px 26px;
    padding: 1.5rem 2.6rem;
    color: #fff;
    border-radius: 0;
    border: none;
    font-size: 22px;
    font-size: 2.2rem;
}
* {
outline: none !important;
}
.btn:hover,
.btn:focus,
.btn:active {
	color: #fff;
}
.btn-transparent {
	background-color: transparent;
	border: 3px solid #fff;
}
.ct-slick .slick-track,
.ct-slick .slick-list,
.ct-slick .item,
.ct-slick .slick-item {
	min-height: inherit;
}
.ct-slick .item {
	background-size: cover;
}
.slick-list {
	height: 600px;
}

/* Transitions */
.activate {
	-moz-opacity: 1;
	-khtml-opacity: 1;
	-webkit-opacity: 1;
	opacity: 1;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(opacity=1 * 100);
	filter: alpha(opacity=1 * 100);
}
.animated {
	-moz-opacity: 0;
	-khtml-opacity: 0;
	-webkit-opacity: 0;
	opacity: 0;
	-ms-filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0 * 100);
	filter: alpha(opacity=0 * 100);
}    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.11/jquery.min.js"></script>
<script>
	$(document).ready(function(){			
  $('.ct-slick-homepage').on('init', function(event, slick){
    $('.animated').addClass('activate fadeInUp');
  });		

  $('.ct-slick-homepage').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
  });			

  $('.ct-slick-homepage').on('afterChange', function(event, slick, currentSlide) {
    $('.animated').removeClass('off');
    $('.animated').addClass('activate fadeInUp');
  });		

  $('.ct-slick-homepage').on('beforeChange', function(event, slick, currentSlide) {
    $('.animated').removeClass('activate fadeInUp');
    $('.animated').addClass('off');
  });
});

 $(document).ready(function() {
 if ($('[data-background]').length > 0) {
      $('[data-background]').each(function() {
        var $background, $backgroundmobile, $this;
        $this = $(this);
        $background = $(this).attr('data-background');
        $backgroundmobile = $(this).attr('data-background-mobile');
        if ($this.attr('data-background').substr(0, 1) === '#') {
          return $this.css('background-color', $background);
        } else if ($this.attr('data-background-mobile') && device.mobile()) {
          return $this.css('background-image', 'url(' + $backgroundmobile + ')');
        } else {
          return $this.css('background-image', 'url(' + $background + ')');
        }
      });
    }
  });
  
</script>
</head>
<body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#products">Products</a>
                <a href="#service">Services</a>
                <a href="#contact">Contact Us</a>
            </nav>
        </div>
    </div>
    <div class="container">
    	<div id="home">
    		<div class="ct-header ct-header--slider ct-slick-custom-dots" id="home">
	<div class="ct-slick-homepage" data-arrows="true" data-autoplay="true">

		<div class="ct-header tablex item" data-background="https://www.solodev.com/assets/hero-slider/slide1.jpg">
			<div class="ct-u-display-tablex">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-6 slider-inner">
								<h1 class="big animated">Big Data. Realtime Insight.</h1>
								<p class="animated">Leverage your data and improve marketing and sales ROI.</p>
								<a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ct-header tablex item" data-background="https://www.solodev.com/assets/hero-slider/slide2.jpg">
			<div class="ct-u-display-tablex">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-6 slider-inner">
								<h1 class="big animated">Disrupting Industries with Grace</h1>
								<p class="animated">WebCorpCo is at the forefront of digital marketing, content management, automated marketing, and more.</p>
								<a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ct-header tablex item" data-background="https://www.solodev.com/assets/hero-slider/slide3.jpg">
			<div class="ct-u-display-tablex">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-6 slider-inner">
								<h1 class="big animated">Moving Business Forward</h1>
								<p class="animated">Learn how WebCorpCo can take your business to the next level.</p>
								<a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- .ct-slick-homepage -->
</div><!-- .ct-header -->      
    	</div>
    	<div id="about">
    		<table>
    			<tr>
    				<td style="width: 50%;"><img src="images/banner2.jpg" width="11px" height="24%" style="margin-left: -136px;
    width: 124%;"></td>
    				<td>
Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</td>
    			</tr>
    		</table>
  
    	</div>
    	<div id="products"><p>
    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
    	</p></div>
    	<div id="service"><p>
    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
    	</p></div>
    	<div id="contact">
    		<table width="100%" style="background-color: red; color: yellow;">
    			<form>
    				<tr>
    					<td><iframe src="" width="50%" height="50%"></iframe></td>
    					<td>
    						<table>
    							<tr>
    								<td>Enter Name:<input type="text" name="name"></td>
    					<td>Enter email:<input type="text" name="name"></td>
    				<td>Enter Mobile:<input type="text" name="name"></td>

    				<td><p></p><input type="submit" name="name" value="leave a message"></td>
    							</tr>
    						</table>
    					</td>
    				</tr>
    			</form>
    		</table>
    	</div>
    </div>    
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2016 Your Company</div>        
    </div>
</body>
</html>                            
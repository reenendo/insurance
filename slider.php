<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img style="height:400px"src="images/so1.png" alt="">
					
			        </li>
			        <li>
			          <img style="height:400px"src="images/beach3.jpg" alt="">
			        
					</li>
					<li>
			          <img style="height:400px"src="images/beach2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							
							<lable></lable>
							<h1><a href="#">Have Fun On The Beach</a></h1>
							</div>
			          </div>
			        </li>
                    <li>
			          <img style="height:400px"src="images/s3.png" alt="">
			        <div class="caption">
			          	<div class="header-info">
							
							<lable></lable>
							<h1><a href="#">Have Fun In The Park</a></h1>
							</div>
			          </div>
			        </li>
                   
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->
</body>
</html>


<?php
 	$sql = "SELECT * FROM trip;";
	$result = mysqli_query($cn, $sql);
	$resultcheck = mysqli_num_rows($result);
	if ($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($result))
		{
			
		}
	}
?>
<?php
mysql_close($cn); // Closing Connection with Server
?>
<!DOCTYPE html>
<html>
<head>
<title>I-Ensure | Insurance Quote</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() 
		{ setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); }

 </script>
<!--js-->
<script src="js/jquery.min.js"></script>

<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<style type="text/css">
#wh-widget-send-button{
    margin: 0 ;
    padding: 0 ;
    position: fixed ;
    z-index: 16000160 ;
    bottom: 0 ;
    text-align: center ;
    height: 90px;
    width: 60px;
    visibility: visible;
    transition: none ;
}
#wh-widget-send-button.wh-widget-right {
    right: 0;
}
#wh-widget-send-button.wh-widget-left {
    left: 10px;
}
#wh-widget-send-button iframe {
    width: 100%;
    height: 100%;
    border: 0;
}
div.clear {
    clear: both;
}</style>
<!--insurance quotes-->


<div class="about section" id="section-2">
<div style="height:70px"></div>
	<div class="about-head text-center">
	  <h3>TRAVEL INSURANCE IN KENYA</h3>
	 	</div>
	</div>
  <div style="height:20px"></div>

	<form action="aboutyou.php" method="post">
<div class="navbar" >
  <a href="#"><i class="fa fa-fw fa-th-list"></i> Trip Details</a> 
  <a class="active"href="#"><i class="fa fa-fw fa-envelope"></i> Quotes</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> About You</a> 
</div>
<div id="section-3">

<?php
if (isset($_GET['sbmt'])) 
{	
	require 'trip.php';
	$cn=makeconnection();
	$id = $_GET['id'];
	$query1 = mysql_query("SELECT * FROM trip WHERE tripid=$id", $cn);
	while ($row1 = mysql_fetch_array($query1)) {
?>
<section id="details-section">
	<section id="get-value-section">
	<div class="container">
	<div class="row" id="filter-details-row">
	<div class="col col-left col-md6 col-sm-6 col-xs-6 col-mb-12">
		<div class="tp mb-20 f15">
			<h5 class="nomargin darkergrey"> <?php echo $row1['Cover']; ?> Travel insurance</h5>
		</div>
		<div class="bottom f15">
			<div class="gray">
			<img src=" ">Travelling to :
			<span class="bold"><?php echo $row1['county']; ?></span>
			</div>
			<div class="gray">
			<img src=" ">Passenger Travelling :
			<span class="bold"><?php echo $row1['passenger']; ?></span>
			</div>
		</div>
	</div>
	<div class="col col-md-6 col-sm-6 col-xs-6 col-mb-12">
		<div class="div">
		<h5 class="nomargin darkergray2 pull-left">Trip start & end Date</h5>
		<a class="btn-edit darkgray2 pull-right" href="trip.php">
			<span class="f13 mr-10">Edit</span>
			<img src="">
		</a>
		</div>
		<br>
		<div class="gray date-item bottom f14">
			<div class="connector"></div>
			<div class="key">
				<img src="">
				<span>Departing on:</span>
			</div>
			<div class="value">
				<span class="bold"><?php echo $row1['TravelDate']; ?>

				</span>
			</div>
		</div>
		<div class="gray date-item bottom f15">
		<div class="connector"></div>
			<div class="key">
				<img src="">
				<span>Returning on:</span>
			</div>
			<div class="value">
				<span class="bold"><?php echo $row1['ReturnDate']; ?>
				</span>
			</div>
		</div>
	</div>
	</div>

	</div>
	</section>
	<?php
}
}
?>
<div class="clear"></div>
</section>
</div>
<!DOCTYPE html>
<html>
<head>
<title>I-Ensure | Insurance Quote</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() 
		{ setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); }

 </script>
<!--js-->
<script src="js/jquery.min.js"></script>

<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>
<body>
<!--header-->
<!--sticky-->
<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<div class="about section" id="section-2">
<div style="height:50px"></div>
	<div class="about-head text-center">
	  <h3>TRAVEL INSURANCE IN KENYA</h3>
	 	</div>
	</div>
  <div style="height:20px"></div>

	<form action="aboutyou.php" method="post">
<div class="navbar" >
  <a href="#"><i class="fa fa-fw fa-th-list"></i> Trip Details</a> 
  <a class="active"href="#"><i class="fa fa-fw fa-envelope"></i> Quotes</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> About You</a> 
</div>


<section id="details-section">

	<section id="get-value-section">
	<div class="container">
	<div class="row" id="filter-details-row">
	<div class="col col-left col-md6 col-sm-6 col-xs-6 col-mb-12">
		<div class="tp mb-20 f15">
		
			<h5 class="nomargin darkergrey"> <?php echo $data[5];?>Travel insurance</h5>
		</div>
		<div class="bottom f15">
			<div class="gray">
			<img src=" ">Travelling to :
			<span class="bold"><?php echo $data[2];?></span>
			</div>
			<div class="gray">
			<img src=" ">Passenger Travelling :
			<span class="bold"><?php echo $data[3];?></span>
			</div>
		</div>
	</div>
	<div class="col col-md-6 col-sm-6 col-xs-6 col-mb-12">
		<div class="div">
		<h5 class="nomargin darkergray2 pull-left">Trip start & end Date</h5>
		<a class="btn-edit darkgray2 pull-right" href="trip.php">
			<span class="f13 mr-10">Edit</span>
			<img src="">
		</a>
		</div>
		<br>
		<div class="gray date-item bottom f14">
			<div class="connector"></div>
			<div class="key">
				<img src="">
				<span>Departing on:</span>
			</div>
			<div class="value">
				<span class="bold">
				<?php echo $data[6];?>
				</span>
			</div>
		</div>
		<div class="gray date-item bottom f15">
		<div class="connector"></div>
			<div class="key">
				<img src="">
				<span>Returning on:</span>
			</div>
			<div class="value">
				<span class="bold">
				<?php echo $data[7];?>
				</span>
			</div>
		</div>
	</div>
	</div>

	</div>
	</table>
	</section>
<table cellpadding="0" cellspacing="0" width="900px">


		


<tr>
<?php

	}?>
<td>
<table border="0" width="250px" bordercolor="#FF6666">

<tr><td align="center" style="background-color:#60B0E6; font-family:Lucida Calligraphy; color:#FFF">
		 </td></tr>
<tr><td class="image"><img src="Admin/subcatimages/<?php echo $data[3]; ?>" width="250px" height="200px" />
</td></tr><br/><br/>
<tr><td align="center" style="background-color:#60B0E6; font-family:Lucida Calligraphy">
<a href="aboutyou.php?subcatid=<?php echo $data[0];?>"><font color="#FFFFFF">Buy Now</font></a></td></tr>

</table>
</td>
<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>




</td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
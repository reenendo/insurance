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

	<form action=" " method="post">
<div class="navbar" >
	<a href="#"><i class="fa fa-fw fa-user"></i> About You</a> 
	<a href="#"><i class="fa fa-fw fa-th-list"></i> Trip Details</a> 
	<a class="active"href="#"><i class="fa fa-fw fa-envelope"></i> Quotes</a> 
  
</div>
<?php

if (isset ($_GET['sbmt']))
{
	$fon=trim($_GET['sbmt']);
	$sql=$PDO->query("SELECT *FROM `trip` WHERE `Tripid`='$fon'");
	foreach($sql->fetchAll() as $row)
	{
		$name=ucwords(base64_decode($row['name'])); 
		$age=$row['age']; 
		$gen=$row['gender'];
	}
	
	$data=""; 
	$no=0;
	$qry=$PDO->query("SELECT *FROM `wards` WHERE `type`='$ward'");
	foreach($qry->fetchAll() as $rw)
	{
	45
	$wid=$rw['time']; 
	$wname=ucwords(base64_decode($rw['ward'])); 
	$tot=$rw['beds'];
	$data.="<option value='$wid'>$wname</option>"; 
	$all[]=$rw['time']; $no+=1;
	}
}
?>
<section id="details-section">

	<section id="get-value-section">
	<div class="container">
	<div class="row" id="filter-details-row">
	<div class="col col-left col-md6 col-sm-6 col-xs-6 col-mb-12">
		<div class="tp mb-20 f15">
			<h5 class="nomargin darkergrey"> Travel insurance</h5>
		</div>
		<br>
		<div class="bottom f15">
			<div class="gray">
			<img src=" ">Travelling to :
			<span class="bold">
			
			</span>
			</div>
			<div class="gray">
			<img src=" ">Passenger Travelling :
			<span class="bold">
			
			</span>
			</div>
		</div>
	</div>
	<div class="col col-md-6 col-sm-6 col-xs-6 col-mb-12">
		<div class="div">
		<h5 class="nomargin darkergray2 pull-left">Trip start & end Date</h5>
		<a class="btn-edit darkgray2 pull-right" href="trip.php">
		<input type="button" value="Edit"  />
			<i class="far fa-file-edit"></i>
		</a>
		</div>
		<br>
		<br>
		<div class="gray date-item bottom f14">
			<div class="connector"></div>
			<div class="key">
				<img src="">
				<span>Departing on:</span>
			</div>
			<div class="value">
				<span class="bold">
				
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
				
				</span>
			</div>
		</div>
	</div>
	</div>

	</div>
	</table>
	</section>



</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>I-Ensure | Insurance Quote</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>

<!--insurance quotes-->
<div class="about section" id="section-2">
	<div class="about-head text-center">
	  <h3>TRAVEL INSURANCE IN KENYA</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	</div>
	</div>

<div style="height:50px"></div>
<div style="width:1200px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Insurance Company</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>


</div>

<div style="width:800px; float:left; padding-left:100px">
<table cellpadding="0px" cellspacing="0" width="900px">
<tr><td class="paraText" width="900px">
<div style="text-align:center">I-Ensure is committed to providing outstanding service and competitive rates. 
We’ll help you determine the right coverage for your needs.
<br>
	<span><a href="aboutyou.php"><input style="background-color: #82E0AA; border-radius: 6px;  color: black;  padding: 14px 20px;  
		margin: 8px 0; width: 50%;"type="button" value="START QUOTE" name="sbmt" /></a>
	</span>

	</div> 
	<br><br>
	Why Travel Insurance
Travel insurance is a “Peace of mind” for anyone travelling to a different County. Everyone loves to go on holidays 
and there is definitely more to think about when traveling . <br><br>
The biggest fear people have when travelling is falling seriously ill in a place where they don’t know 
the language, people, or customs.<br><br>

It not only covers the costs of unforeseen incidents, but it also provides practical assistance  24 hours a 
day, 365 days a year!<br><br>

Among the most commonly covered risks in travel insurance covers for emergency medical expenses , 
repatriation in case of death, terrorism and hijack, travel delay and cancellation, baggage delay or loss, 
loss of passport/ID and a number of public liabilities .<br><br>

<br><br>

<td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode,
	 Lucida Grande, sans-serif; font-size:24px; " width="500px" height="250px" >
	 <div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top;   width:100%;">
	 HAVE A GOOD TIME <br>without spending a fortune</div	></td></tr></table>
</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
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

<!--insurance quotes-->

<div class="about section" id="section-2">
<div style="height:70px"></div>
	<div class="about-head text-center">
	  <h3>TRAVEL INSURANCE IN KENYA</h3>
	 	</div>
	</div>
  <div style="height:20px"></div>

  <?php
if(isset($_POST["sbmt"]))
{

	$cn=makeconnection();
	$sql="INSERT INTO trip (County,Passenger,Purpose,Cover,TravelDate,ReturnDate) VALUES(	'" . $_POST['county'] ."',
  '" . $_POST['passenger'] ."','" . $_POST['purpose'] ."','" . $_POST['cover'] ."','" . $_POST['tdate'] ."',
  '" . $_POST['fdate'] ."')";
	
	mysqli_query($cn, $sql);
	mysqli_close($cn);
	header("location: quote.php?note=success");
}
?>

	<form  method="post">
<div class="navbar" >
  <a href="#"><i class="fa fa-fw fa-user"></i> About You</a>
  <a class="active"href="#"><i class="fa fa-fw fa-th-list"></i> Trip Details</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Quotes</a>  
</div>

  <div class="container">
  <div class="row">
      <div class="col-25">
      <label for="county"><b>Which County are you travelling to?</b></label>
      </div>
      <div class="col-75">
      <select id="county" name="county">
        <option value="">County</option>
      <option value="bomet">Bomet County</option><option value="bungoma">Bungoma County</option>
      <option value="busia">Busia County</option><option value="elgeyo marakwet">Elgoyo Marakwet County</option>
      <option value="embu">Embu County</option><option value="garissa">Garissa County</option>
		  <option value="homabay">Homabay County</option><option value="isiolo">Isiolo County</option>
      <option value="kajiado">Kajiado County</option><option value="kakamega">Kakamega County</option>
      <option value="kericho">Kericho County</option><option value="kiambu">Kiambu County</option>
      <option value="kilifi">Kilifi County</option><option value="kirinyaga">Kirinyaga County</option>
      <option value="kisii">Kisii County</option><option value="kisumu">Kisumu County</option>
      <option value="kitui">Kitui County</option><option value="kwale">Kwale County</option>
      <option value="laikipia">Laikipia County</option><option value="lamu">Lamu County</option>
      <option value="machakos">Macahakos County</option><option value="makueni">Makueni County</option>
      <option value="mandera">Mandera County</option><option value="marsabit">Marsabit County</option>
      <option value="meru">Meru County</option><option value="migori">Migori County</option>
      <option value="mombasa">Mombasa County</option><option value="muranga">Murang'a County</option>
      <option value="nairobi">Nairobi County</option><option value="nakuru">Nakuru County</option>
      <option value="nandi">Nandi County</option><option value="narok">Narok County</option>
      <option value="nyamira">Nyamira County</option><option value="nyandarua">Nyandarua County</option>
      <option value="nyeri">Nyeri County</option><option value="samburu">Samburu County</option>
      <option value="siaya">Siaya County</option><option value="taita taveta">Taita Taveta County</option>
      <option value="tana river">Tana River County</option><option value="trans nzoia">Trans Nzoia County</option>
      <option value="tharaka nithi">Tharaka Nithi County</option><option value="turkna">Turkana County</option>
      <option value="uasin gishu">Uasin Gishu County</option><option value="vihiga">Vihiga County</option>
      <option value="wajir">Wajir County</option><option value="west pokot">West Pokot County</option>
      </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="passenger">Who is travelling?</label>
      </div>
      <div class="col-75">
      <select id="passenger" name="passenger">
        <option value="">Passenger</option>
        <option value="self">Individual</option>
        <option value="family">Family</option>
        <option value="student">Student</option>
        </select>
      </div>
    </div>
    
  <div class="row">
      <div class="col-25">
        <label for="purpose">Purpose of travel? </label>
      </div>
      <div class="col-75">
      <select id="purpose" name="purpose">
      <option value="">Purpose of travel</option>
        <option value="holiday">Holiday</option>
        <option value="business">Business</option>
      </select>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="cover">what type of cover do you need? </label>
      </div>
      <div class="col-75">
      <select id="cover" name="cover">
      <option value="">Cover</option>
        <option value="single trip">SINGLE TRIP</option>
        <option value="annual cover">ANNUAL COVER</option>
      </select>
      </div>
    </div>
         
  <div class="row">
      <div class="col-25">
        <label for="date">Travel Date:</label>
      </div>
      <div class="col-75">
      <input type="date" id="tdate" name="tdate"><label for="date"> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="date">Return Date:</label>
      </div>
      <div class="col-75">
        <input type="date" id="fdate" name="fdate">
        </div>
    </div>
    
        <div style="height:50px"></div>
		<div align="center"><button  type="submit" name="sbmt">VIEW QUOTE</button></div>

	</form>
</div>
<div style="height:50px"></div>



<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>
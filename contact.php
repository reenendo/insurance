<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>I-Ensure | Contact </title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,
			700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, 
		false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

<div style="height:50px"></div>


<div id="" class="contact section">
	  <div class="contact-head text-center"><h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip
Our insurance experts got you covered</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">I-Ensure</h4>
						<p style="color:#000">NEED HELP PURCHASING INSURANCE QUOTE<br/>
                        For fantastic suggestions you may also call our insurance expert</p>
						<h5 style="color:#000"><span class="img1"></span>+254 703502806</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">ensure@gmail.com</a></h5>
						
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
				  <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$sql="INSERT INTO contactus(Name,Phno,Email,Message) VALUES('" . $_POST["t1"] ."',
	'" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$sql);
	mysqli_close($cn);
	header("location: thankyou.php?note=success");
}

?>


<form method="post" >
    <table border="0" width="700px" height="500px">
	<tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" 
							onBlur="if (this.value == '') {this.value = 'Your Name';}" 
							required pattern="[a-zA-z1 _]{1,50}" 
							title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
	<tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" 
							onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" 
							required pattern="[0-9]{10,12}" 
							title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
	<tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" 
							onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
	<tr><td align="left"> <textarea  onFocus="if(this.value == 'Message') this.value='';" name="t4" 
					onBlur="if(this.value == '') this.value='Enter Message Here';" required></textarea></td></tr>
	<tr><td align="left"><input type="submit" value="Send message" name="sbmt"></td></tr></table>
	<div class="clearfix"></div>
	  </form>
	  </div>
	 <div class="clearfix"></div>
	</div>
	</div>

<?php include('bottom.php'); ?>
</body>
</html>


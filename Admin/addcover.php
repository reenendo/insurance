<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>I-Ensure | Admin </title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,
	900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, 
false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$_t1 = $_POST["t1"];
	$_t2 = $_POST["t2"];
	$_t3 = $_FILES["t3"]["name"];
	$_t4 = $_POST["t4"];
	$_t5 = $_POST["t5"];
	$_t6 = $_POST["t6"];
	$_t7 = $_POST["t7"];
	$_t8 = $_POST["t8"];
	$_t8 = $_POST["t9"];
	$_t8 = $_POST["t10"];
	$_t8 = $_POST["t11"];
	$_t8 = $_POST["t12"];
	$_t8 = $_POST["t13"];
	$_t8 = $_POST["t14"];
	$_t8 = $_POST["t15"];
	$_t8 = $_POST["t16"];
	$_t8 = $_POST["t17"];	
	$s = "insert into cover(Cover,Companyname,Pic,Medicalcover,Coveragedays,Departure,Buggage,Amount,Disability,
		Hospitalization,Illness,Dentalcare,Mortalremains,Returnhome,Cancellation,LossID,Luggage) 
		values('$_t1','$_t2','$_t3','$_t4','$_t5','$_t6','$_t7','$_t8','$_t9','$_t10','$_t11','$_t12','$_t13',
		'$_t14','$_t15','$_t16','$_t17',)";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	header ("location: addcover.php?note=Record saved");
	
}
?>
<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

<form method="post" enctype="multipart/form-data">
<table border="0" width="90%" height="1200px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add Cover</td></tr>

<tr><td class="lefttxt">Cover</td><td><select name="t1" required>
	<option value="">Select</option>
	<option value="Single Trip">Single Trip Cover</option>
	<option value="Annual Cover">Annual Cover</option>
	</select>
	</td></tr>
<tr><td class="lefttxt">Company Name</td><td><input type="text" name="t2"/></td></tr>
<tr><td class="lefttxt">Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td class="lefttxt">Medical Cover</td><td><input type="text" name="t4"/></td></tr>
<tr><td class="lefttxt">Coverage upto</td><td><input type="text" name="t5"/></td></tr>
<tr><td class="lefttxt">Delayed Depature</td><td><input type="text" name="t6"/></td></tr>
<tr><td class="lefttxt">Loss of Buggage</td><td><input type="text" name="t7"/></td></tr>
<tr><td class="lefttxt">Amount</td><td><input type="text" name="t8"/></td></tr>
<tr><td class="lefttxt">Disability</td><td><input type="text" name="t9" /></td></tr>
<tr><td class="lefttxt">Medical Expenses & Hospitalization</td><td><input type="text" name="t10" /></td></tr>
<tr><td class="lefttxt">Repatriation in case Illness</td><td><input type="text" name="t11" /></td></tr>
<tr><td class="lefttxt">Emergency Dental Care</td><td><input type="text" name="t12" /></td></tr>
<tr><td class="lefttxt">Repatriation of Mortalremains</td><td><input type="text" name="t13" /></td></tr>
<tr><td class="lefttxt">Return home</td><td><input type="text" name="t14" /></td></tr>
<tr><td class="lefttxt">Trip Cancellation</td><td><input type="text" name="t15" /></td></tr>
<tr><td class="lefttxt">Loss of ID</td><td><input type="text" name="t15" /></td></tr>
<tr><td class="lefttxt">Loss of Luggage</td><td><input type="text" name="t6" /></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>

</table>
</form>

</div>
</div>
<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$target_dir = "companyimages/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t3"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
		
	//allow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif")
	{
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}
	else	
	{
	if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file))
	{
	$s = "insert into cover(Cover,Companyname,Pic,Medicalcover,Coveragedays,Departure,Buggage,Amount,Disability,
	Hospitalization,Illness,Dentalcare,Mortalremains,Returnhome,Cancellation,LossID,Luggage) 
	values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . basename($_FILES["t3"]["name"]) . "',
	'" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','" . $_POST["t8"] ."',
'" . $_POST["t9"] ."','" . $_POST["t10"] ."','" . $_POST["t11"] ."','" . $_POST["t12"] ."','" . $_POST["t13"] ."',
'" . $_POST["t14"] ."','" . $_POST["t15"] ."','" . $_POST["t16"] ."','" . $_POST["t17"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	header ("location: addcover.php?note=Record saved");
	}
	else{
			echo "sorry there was an error uploading your file.";
		}}
}
?>
</body>
</html>



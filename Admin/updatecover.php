<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>I-Ensure | Admin </title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	
	$target_dir = "partnersimage/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	
	if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file)){
			
	}else{
			echo "sorry there was an error uploading your file.";
		}
		}
?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();

if (empty($_FILES['t3']['name'])) {
	
	$s="update cover set Cover='" . $_POST["t1"] ."',Patid='" . $_POST["t2"] . "',
    Pic='" . $_POST["h1"] . "',Medicalcover='" . $_POST["t4"] . "',Coveragedays='" . $_POST["t5"] . "',
    Departure='" . $_POST["t6"] . "',Buggage='" . $_POST["t7"] . "',Amount='" . $_POST["t8"] . "'
     where Coverid='" . $_POST["s1"] . "'";
	
}
else
{
	
    $s="update cover set Cover='" . $_POST["t1"] ."',Patid='" . $_POST["t2"] . "',
    Pic='" .  basename($_FILES["t3"]["name"]) . "',Medicalcover='" . $_POST["t4"] . "',
    Coveragedays='" . $_POST["t5"] . "',    Departure='" . $_POST["t6"] . "',Buggage='" . $_POST["t7"] . "',
    Amount='" . $_POST["t8"] . "' where Coverid='" . $_POST["s1"] . "'";
    }

	mysqli_query($cn,$s);
	mysqli_close($cn);
	header ("location: updatecover.php?note=Record saved");
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
<table border="0" width="450px" height="900px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Cover</td></tr>
<tr><td class="lefttxt">Select Cover</td><td><select name="s1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from cover";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from cover where coverid='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Coverid=$data[0];
$Cover=$data[1];
$Patid=$data[2];
$Pic=$data[3];
$Medicalcover=$data[4];
$Coveragedays=$data[5];
$Depature=$data[6];
$Buggage=$data[7];
$Amount=$data[8];

mysqli_close($cn);

}

?>

</td></tr>

<tr><td class="lefttxt">Select Cover</td><td><input type="text" 
value="<?php if(isset($_POST["show"])){ echo $Cover ;} ?> " 
name="t1" required /></td></tr>
<tr><td class="lefttxt">Select Company Name</td><td><select name="t2"  
value="<?php if(isset($_POST["show"])){ echo $Patid ;} ?> " 
required="required" /><option value="Select">Select</option>

<?php
$cn=makeconnection();
$s="select * from partners";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"]) && $data[0]==$Patid)
	{
		echo "<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
	
}
mysqli_close($cn);
?>
</select>

<tr><td class="lefttxt">Old Pic</td><td><img src="partnerimages/<?php echo @$Pic; ?>" 
width="150px" height="100px" / >
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Pic;} ?>" />
</td></tr>
<tr><td class="lefttxt">Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td class="lefttxt">Medical Cover</td><td><textarea name="t4" />
<?php if(isset($_POST["show"])){ echo $Medicalcover ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Coverage Upto</td><td><textarea name="t5" />
<?php if(isset($_POST["show"])){ echo $Coveragedays ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Delay Departure</td><td><textarea name="t6" />
<?php if(isset($_POST["show"])){ echo $Depature ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Loss of Buggage</td><td><textarea name="t7" />
<?php if(isset($_POST["show"])){ echo $Buggage ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Amount</td><td><textarea name="t8" />
<?php if(isset($_POST["show"])){ echo $Amount ;} ?></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>

</table>
</form>

</div>


</div>
<?php include('bottom.php'); ?>

</body>
</html>


             
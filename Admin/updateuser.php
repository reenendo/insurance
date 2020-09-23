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
	$s="update clients set Firstname='" . $_POST["t1"] ."',Lastname='" . $_POST["t2"] . "',
	Phno='" . $_POST["t3"] . "' ,Email='" . $_POST["t4"] . "',Age='" . $_POST["t5"] . "'
	where email='" 	. $_POST["t4"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	header ("location: updateuser.php?note=Record saved");
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="height:50px"></div>
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

<form method="post">
<table border="0" width="600px" height="600px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update User</td></tr>
<tr><td class="lefttxt">Select User</td><td><select style=" width:400px;" name="t4" required/>

<?php
$cn=makeconnection();
$s="select * from clients";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["t4"])
	{
		echo"<option value=$data[4] selected>$data[4]</option>";
	}
	else
	{
		echo "<option value=$data[4]>$data[4]</option>";
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
$s="select * from clients where subcatid='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Subcatid=$data[0];
$Subcatname=$data[1];
$Catid=$data[2];
$Pic=$data[3];
$Detail=$data[4];

mysqli_close($cn);

}

?>


</td></tr>
<tr><td class="lefttxt">First Name</td><td><input style=" width:400px;" type="text"  value="<?php 
	if(isset($_POST["show"])){ echo $Firstname ;} ?>" name="t1" required />
	</td></tr>
<tr><td class="lefttxt">Last Name</td><td><input style=" width:400px;" type="text"  value="<?php 
	if(isset($_POST["show"])){ echo $Lastname ;} ?>" name="t2" required />
	</td></tr>
<tr><td class="lefttxt">Phone Number</td><td><input style=" width:400px;" type="text"  value="<?php 
	if(isset($_POST["show"])){ echo $Phno ;} ?>" name="t3" required pattern="[0-9]{10,12}" 
	title"Please Enter Only  numbers between 10 to 12 for Contact no"/></td></tr>
<tr><td class="lefttxt">Email</td><td><input style=" width:400px;" type="text"  value="<?php 
	if(isset($_POST["show"])){ echo $Email ;} ?>" name="t4" required />
	</td></tr>
<tr><td class="lefttxt">Age</td><td><input type="text"  value="<?php if(isset($_POST["show"]))
	{ echo $Age ;} ?>" name="t5" required pattern="{1,10}" /></td></tr>

</select></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
</table>
</form>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>

<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%">
<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="addadmin.php">Add Admin User</a></td></tr>
<tr><td><a href="updateadmin.php">Update Admin User</a></td></tr>
<tr><td><a href="deleteadmin.php">Delete Admin User</a></td></tr>
<tr><td><a href="viewadmin.php">View Admin User</a></td></tr>

<tr><td><a href="updateuser.php">Update User</a></td></tr>
<tr><td><a href="deleteuser.php">Delete User</a></td></tr>
<tr><td><a href="viewusers.php">View Users</a></td></tr>
<tr><td><a href="viewtraveldetails.php">View Travel Details</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">Add Category</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">Update Category</a></td></tr>
<tr><td><a href="deletecategory.php">Delete Category</a></td></tr>
<?php }?>


<tr><td><a href="viewcategory.php">View Category</a></td></tr>
<tr><td><a href="addcover.php">Add Cover</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecover.php">Update Cover</a></td></tr>
<tr><td><a href="deletecover.php">Delete Cover</a></td></tr>
<?php }?>

<tr><td><a href="viewcover.php">View Cover</a></td></tr>
<tr><td><a href="addmedical.php">Add Medical Benefits</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatemedical.php">Update Medical Benefits</a></td></tr>
<tr><td><a href="deletemedical.php">Delete Medical Benefits</a></td></tr>

<?php }?>

<tr><td><a href="viewmedical.php">View Medical Benefits</a></td></tr>
<tr><td><a href="addtravel.php">Add Travel Benefits</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatetravel.php">Update Medical Benefits</a></td></tr>
<tr><td><a href="deletetravel.php">Delete Medical Benefits</a></td></tr>

<?php }?>

<tr><td><a href="viewtravel.php">View Medical Benefits</a></td></tr>

<tr><td><a href="addpartners.php">Add partners</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="deletepartners.php">Delete partners</a></td></tr>
<?php }?>

<tr><td><a href="viewpartners.php">View partners</a></td></tr>
<tr><td><a href="viewenquiry.php">View Enquiry</a></td></tr>
</table>


</body>
</html>
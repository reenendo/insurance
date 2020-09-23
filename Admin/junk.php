<?php
    $cn=makeconnection();
	
	$target_dir = "partnerimages/";
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
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file)){
            
            $s="insert into cover (Cover,Patid,Pic,Medicalcover,Coveragedays,Departure,Buggage,Amount) 
            values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . basename($_FILES["t3"]["name"]) . "',
            '" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."',
            '" . $_POST["t8"] ."')";
        mysqli_query($cn,$s);
        mysqli_close($cn);
        header ("location: addcover.php?note=Record saved");
        

            
		} else{
			echo "sorry there was an error uploading your file.";
        }}
        
    }


    <tr><td class="lefttxt">Select Company</td><td><select name="t2" required /><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from partners";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<option value=$data[0]>$data[1]</option>";
	
}

?>

</select>
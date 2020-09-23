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
	$sql="INSERT INTO clients(Firstname,Lastname,IDno,KRA,Phno,Email,Occupation,Age,Gender) 
  VALUES(	'" . $_POST['fname'] ."','" . $_POST['lname'] ."','" . $_POST['id'] ."','" . $_POST['pin'] ."',
  '" . $_POST['mobile'] ."','" . $_POST['email'] ."','" . $_POST['occupation'] ."','" . $_POST['age'] ."',
  '" . $_POST['gender'] ."')";
	
  mysqli_query($cn, $sql);
	mysqli_close($cn);
	header("location: trip.php?note=Registration successful");
	
}
?>
	<form  method="POST">
<div class="navbar" >  
  <a class="active"href="#"><i class="fa fa-fw fa-user"></i> About You</a> 
  <a href="#"><i class="fa fa-fw fa-th-list"></i> Trip Details</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Quotes</a> 
</div>

  <div class="container">
  <div class="row">
      <div class="col-25">
        <label for="fname">First Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Enter Firstname" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Lastname:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Enter Lastname" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="id">ID Number:</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Enter ID Number" required pattern="[0-9]{10,12}" 
							title"Please Enter Only  numbers between 7 to 12 for ID no >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="pin">KRA PIN:</label>
      </div>
      <div class="col-75">
        <input type="text" id="pin" name="pin" placeholder="Enter KRA PIN" required >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="mobile">Mobile Number:</label>
      </div>
      <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number" required pattern="[0-9]{10,12}" 
						title"Please Enter Only  numbers between 10 to 12 for Contact no">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="email">Email Address:</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Enter your Email Address" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="occupation">Occupation:</label>
      </div>
      <div class="col-75">
       <select name="occupation" id="occupation">
       <option value="">occupation</option>
         <option value="salaried">Salaried</option>
         <option value="self-employed">Self-Employed</option>
         <option value="retired">Retired</option>
         <option value="student">Student</option>
         <option value="unemployed">Unemployed</option>
       </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="age">Age:</label>
      </div>
      <div class="col-75">
      <select id="age" name="age">
      <option value="">age</option>
      <option value="18">18</option><option value="19">19</option><option value="20">20</option>
		  <option value="21">21</option><option value="22">22</option><option value="23">23</option>
		  <option value="24">24</option><option value="25">25</option><option value="26">26</option>
		  <option value="27">27</option><option value="28">28</option><option value="29">29</option>
		  <option value="30">30</option><option value="31">31</option><option value="32">32</option>
		  <option value="33">33</option><option value="34">34</option><option value="35">35</option>
		  <option value="36">36</option><option value="37">37</option><option value="38">38</option>
		  <option value="39">39</option><option value="40">40</option><option value="41">41</option>
		  <option value="42">42</option><option value="43">43</option><option value="44">44</option>
		  <option value="45">45</option><option value="46">46</option><option value="47">47</option>
		  <option value="48">48</option><option value="49">49</option><option value="50">50</option>
		  <option value="51">51</option><option value="52">52</option><option value="53">53</option>
		  <option value="54">54</option><option value="55">55</option><option value="56">56</option>
		  <option value="57">57</option><option value="58">58</option><option value="59">59</option>
		  <option value="60">60</option><option value="61">61</option><option value="62">62</option>
		  <option value="63">63</option><option value="64">64</option><option value="65">65</option>
		  <option value="66">66</option><option value="67">67</option><option value="68">68</option>
		  <option value="69">69</option><option value="70">70</option><option value="71">71</option>
		  <option value="72">72</option><option value="73">73</option><option value="74">74</option>
		  <option value="75">75</option><option value="76">76</option><option value="77">77</option>
		  <option value="78">78</option><option value="79">79</option><option value="80">80</option>
      </select>
      </div>
      </div>
      <div class="row">
      <div class="col-25">
      <label>Please select your gender:</label>
      </div>
      <div class="col-75">
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
      </div>
      </div>

        <div style="height:10px"></div>
        <label>
<input type="checkbox" checked="checked" name="remember"> I accept the <a href="terms.php" style="color:dodgerblue" >
      terms & conditions</a> of I-Ensure
    </label>
    <div style="height:20px"></div>
		<div align="center"><button type="submit" name="sbmt">CONTINUE</button></div>

	</form>
</div>
<div style="height:50px"></div>



<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>



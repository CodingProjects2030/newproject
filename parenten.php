<?php
   session_start();
   
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
$id = $_SESSION['userid'];
}
else
{  	 header('Refresh: 0; URL = login.php');
}

?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="csen.css?=version=7" rel="stylesheet">
<style>
p {color:red;}

.dropbtn {
  color: #151414;

font-size: 22px;
border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  
border: 2px solid black;
background-color: white;
border-radius: 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {}

.dropdown:hover .dropdown-content {display: block;position:fixed;}

.dropdown:hover .dropbtn {}
</style>

</head>
<body>

<div class="top">
<ul>
 
  <li class="h"><a href="#about"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
 
      <?php
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="signout.php">Sign Out</a></li>';
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;"><a href="updateen.php">Update Info</a></li>';
}
else
{   ?>
	
	<?php
	
}
?>

  <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="parenten.php">Parents</a></li>
  
    <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="healthservicesen.php">Health Services</a></li>
	

 <li class="hh" style="
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="">Education Services <div class="dropdown-content">
    <a href="educationalservicesen.php?id=1">English</a>
    <a href="educationalservicesen.php?id=2">Information Technology</a>
   <a href="educationalservicesen.php?id=3">Sign Language</a>
   
   
  </div></a></div></li>
<li class="hh" style="
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="">Entertainment Services <div class="dropdown-content">
    <a href="entertainmentservicesen.php?id=1">Excersizes </a>
    <a href="entertainmentservicesen.php?id=2">Stories</a>
   
   
  </div></a></div></li>
   
   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="aboutusen.php">About Us</a></li>
   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="parentar.php">العربية</a></li>
  
   

</ul>
</div>

<div id="container" style="margin-top:100px;height:auto;margin-top: 122px;">
  
  <div id="container2" style="height:auto;text-align:right;    background-color: #d4e8d5;">
 
  <form  role = "form"  id="arra" action="" method = "post" style="text-align:left;">
 <p>What is your opinion about this website:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="q1" value="Excelent" checked>
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="q1" value="Good">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="q1" value="Bad">
  
<br>  
<p>What is you child understanding from educational services:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="q2" value="Excelent">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="q2" value="Good">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="q2" value="Bad">
  
<br>  
<p>What is you child benefit from educational services:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="q3" value="Excelent">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="q3" value="Good">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="q3" value="Bad">
  
<br> 
<p>Is entertainment services are suitable for your child ? </p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="q4" value="Excelent">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="q4" value="Good">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="q4" value="Bad">
  
<br> 
<p>How satisfied are you with the health services provided? </p>
<label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="q5" value="Excelent">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="q5" value="Good">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="q5" value="Bad">
  
<br>
<p>If you have a comment please mention it</p>
 <textarea  name="feedback" rows="4" cols="80"></textarea>
 <br> 
<br>  
<button style="    margin-right: 46%;
    background-color: #93ce95;
    color: white;
    font-size: 22px;
    padding: 8px;" type="submit" onclick="hh()" name="login">Send</button>
	
	<?php
		 require_once 'DbConnect.php';
				

         
			if (isset($_POST['q1']) ) 

                {
					if (
               isset($_POST['q2']) ) 
			  

                {
					if (
			   isset($_POST['q3']) ) 
		
                {
					if (
			   isset($_POST['q4']) ) 

                {
					if (
			   isset($_POST['q5']) ) 

                {
					
				
				  
				   $q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$feedback=$_POST['feedback'];				   
				
 $stmt = $conn->prepare("SELECT userId FROM feedback WHERE userId = ?");
					$stmt->bind_param("s", $id);
					$stmt->execute();
					$stmt->store_result();
					
					//if the user already exist in the database 
					if($stmt->num_rows > 0){
						//$response['error'] = true;
					//	$response['message'] = 'User already registered';
					 echo '<h2 style="color:red;">Sorry, You already sent the feedback </h2>';
						$stmt->close();
					}else{
						
						
					$stmt = $conn->prepare("INSERT INTO feedback (userId, q1,q2,q3,q4,q5,feedback) VALUES (?,?,?,?,?,?,?)");
				$stmt->bind_param("sssssss", $id, $q1, $q2,$q3,$q4,$q5,$feedback);
						
					
						if($stmt->execute()){
						$stmt->close();
							
						
							 echo 'Thanks, Your feedback has been sent';
						header('Refresh: 2; URL = parenten.php');}
				  
				  
				}}}}}}
			  
			  
			   
			
         ?>
		 
</form>
</div>
</div>
<br>


<script>
function bigImg(x) {
  x.style.height = "300px";
  x.style.width = "300px";
}

function normalImg(x) {
  x.style.height = "100px";
  x.style.width = "100px";
}
</script>
</body>
</html>

<?php
   session_start();
   
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {

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
    <a href="educationalservices.php?id=1">English</a>
    <a href="educationalservices.php?id=2">Information Technology</a>
   
  </div></a></div></li>
<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="entertainmentservicesen.php">Entertainment Services</a></li>

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="parentar.php">العربية</a></li>
  
   

</ul>
</div>

<div id="container" style="margin-top:100px;height:auto;margin-top: 122px;">
  
  <div id="container2" style="height:auto;text-align:right;    background-color: #d4e8d5;">
  <form action="/action_page.php" style="text-align:left;">
 <p>What is your opinion about this website:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>What is you child understanding from educational services:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>What is you child benefit from educational services:</p>
 <label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br> 
<p>Is entertainment services are suitable for your child ? </p>
 <label for="html">Yes</label>
  <input style="float:left;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">little</label>
  <input style="float:left;" type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">No</label>
  <input style="float:left;" type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br> 
<p>How satisfied are you with the health services provided? </p>
<label for="html">Excelent</label>
  <input style="float:left;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">Good</label>
  <input style="float:left;" type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">Bad</label>
  <input style="float:left;" type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>
<p>If you have a comment please mention it</p>
 <textarea  name="w3review" rows="4" cols="80"></textarea>
 <br> 
<br>  
<button style="    margin-right: 46%;
    background-color: #93ce95;
    color: white;
    font-size: 22px;
    padding: 8px;" type="submit" onclick="hh()" name="login">Send</button>
	
	<?php
		 require_once 'DbConnect.php';
				

         
			
			
            
			
			if (isset($_POST['question']) && !empty($_POST['question']) 
               ) {
				  
				  
				   $question=$_POST['question']; 
				  $answer = 'لم تتم الاجابة بعد';
 
						$stmt = $conn->prepare("INSERT INTO health (userId, question,answer) VALUES (?,?,?)");
						$stmt->bind_param("sss", $id, $question, $answer);
						
						//if the user is successfully added to the database 
						if($stmt->execute()){
						$stmt->close();
							
							//adding the user data in response 
							//$response['error'] = false; 
						//	$response['message'] = 'User registered successfully'; 
							//$response['user'] = $user; 
							 echo 'Thank you your comment has been sent ';
							  header('Refresh: 2; URL = healthservices.php');
						}
  
   
				   
				   
				   
		
			   }
			
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

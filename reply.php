<?php
   session_start();
   
if(isset($_SESSION['health']) && !empty($_SESSION['health'])) {

}
else
{  	 header('Refresh: 0; URL = login.php');
}

?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title></title>

  <link href="Student.css?session=8" rel="stylesheet">
   <link href="cs.css?=version=8" rel="stylesheet">
  <script type="text/javascript" src="Student.js"></script>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  direction:rtl;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
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
if(isset($_SESSION['health']) && !empty($_SESSION['health'])) {
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="signout.php">تسجيل الخروج</a></li>';

}
else
{   ?>
	
	<?php
	
}
?>
 
  
  

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="indexen.html">English</a></li>
  
   

</ul>
</div>

<br>
<center id="formLog">

<div class="containers" id="container" style="min-height: 422px;margin-top: 15px;">
	
	
	
		
			
				<h1>الخدمات الصحية</h1>
			<?php
 require_once 'DbConnect.php';
$id=$_REQUEST['id'];
$sel_query="Select * from health  where id ='".$id."'"; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<?php  $question = $row["question"]; 
}


?>

<p> السؤال <br>
<?php 
   echo $question; ?>       </p>
   
   <br>
   
		
  
  
	
	
</div>


<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
		<form style= "height:auto;" role = "form"  id="arra" action="" method = "post">
			
				<h1>الرد على الاستفسار</h1>
	
			<textarea name="answer" rows="10" cols="90"> </textarea>
			
			<br>
			
		
			
  
  
			<button type="submit" name="signup">ارسل</button>
			
			<?php
		
         
			
			
            
			
			if (isset($_POST['answer']) && !empty($_POST['answer'] ) 
               ) {
				
				  
				   $answer=$_POST['answer']; 
				  
						$ins_query = "update  health  set answer = '$answer' where id = '$id'";
						
if (mysqli_query($conn,$ins_query))
	
	{echo "<div ><h3>تم ارسال الرد</h3></div>";
	 header('Refresh: 2; URL = healthadmin.php');}
	else{die(mysql_error());}
  
   
				   
				   
				   
		
			   }
			
         ?>
		</form>
	
	
	
</div>

</center>



<div class="footer">
</div>


</body>
</html>

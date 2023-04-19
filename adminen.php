<?php
   session_start();
   
if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {

}
else
{  	 header('Refresh: 0; URL = loginen.php');
}

?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title></title>

  <link href="Student.css?session=8" rel="stylesheet">
   <link href="csen.css?=version=8" rel="stylesheet">
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
if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="signout.php">Sign Out</a></li>';

}
else
{   ?>
	
	<?php
	
}
?>
 
  
  

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="admin.php">العربية</a></li>
  
   

</ul>
</div>

<br>
<center id="formLog">



<div class="containers" id="container" style="min-height: 300px;margin-top: 18px;">
	
	
		
				<h1 style="color: #00c968;">Users Report</h1>
				
				<?php

						echo '<table style="direction:ltr;">
  <tr>
    <th>Number of  Users</th>
    <th>Female</th>
	<th>Male</th>
	<th>deafnes Disability</th>
	<th>visual Disability</th>
	<th>mobility Disability</th>
	</tr>';
	 require_once 'DbConnect.php';
						$sel_query="Select * from users    "; 
$result = mysqli_query($conn,$sel_query);
$countusers = 0;
$countmale = 0;
$countfemale = 0;
$countdeafnes = 0;
$countvisual = 0;
$countmobility = 0;

while($row = mysqli_fetch_assoc($result)) { 
$countusers+=1;}

$sel_query="Select * from users where sex = 'Female'    "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$countmale+=1;}

$sel_query="Select * from users where sex = 'Male'    "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$countfemale+=1;}

$sel_query="Select * from users where disability = 'deafness'    "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$countdeafnes+=1;}

$sel_query="Select * from users where disability = 'visual'    "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$countvisual+=1;}

$sel_query="Select * from users where disability = 'mobility'    "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$countmobility+=1;}

echo ' <tr>
    <td>'; echo $countusers;echo ' </td>
    <td>'; echo $countfemale; echo'</td>';
	
	echo '
    <td>'; echo $countmale;echo ' </td>
    <td>'; echo $countdeafnes; echo'</td>';
	
	echo ' 
    <td>'; echo $countvisual;echo ' </td>
    <td>'; echo $countmobility; echo'</td>';
	
	
	


	
	echo'
	  
    
</tr>';

 
 echo'</table>';
					
					
					
						



?>
	
		
		
	
	
	
</div>


<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
	
				
	
			
				<h1 style="color: #00c968;">Feedback Report</h1>
				
				<?php

						echo '<table style="direction:ltr;">
  <tr>
    <th>Question</th>
    <th>Excelent (%)</th>
	<th>Good (%)</th>
	<th>Bad (%)</th>
	
	</tr>';
	 require_once 'DbConnect.php';
						
$q11 = 0;
$q21 = 0;
$q31 = 0;
$q41 = 0;
$q51 = 0;

$q12 = 0;
$q22 = 0;
$q32 = 0;
$q42 = 0;
$q52 = 0;


$q13 = 0;
$q23 = 0;
$q33 = 0;
$q43 = 0;
$q53 = 0;
$countmobility = 0;

$sel_query="Select * from feedback where q1 = 'Excelent'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q11+=1;}


$sel_query="Select * from feedback where q2 = 'Excelent'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q21+=1;}

$sel_query="Select * from feedback where q3 = 'Excelent'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q31+=1;}

$sel_query="Select * from feedback where q4 = 'Excelent'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q41+=1;}

$sel_query51="Select * from feedback where q5 = 'Excelent'     "; 
$result51 = mysqli_query($conn,$sel_query51);
while($row = mysqli_fetch_assoc($result51)) { 
$q51+=1;}





$sel_query="Select * from feedback where q1 = 'Good'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q12+=1;}


$sel_query="Select * from feedback where q2 = 'Good'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q22+=1;}

$sel_query="Select * from feedback where q3 = 'Good'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q32+=1;}

$sel_query="Select * from feedback where q4 = 'Good'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q42+=1;}

$sel_query="Select * from feedback where q5 = 'Good'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q52+=1;}






$sel_query="Select * from feedback where q1 = 'Bad'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q13+=1;}


$sel_query="Select * from feedback where q2 = 'Bad'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q23+=1;}

$sel_query="Select * from feedback where q3 = 'Bad'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q33+=1;}

$sel_query="Select * from feedback where q4 = 'Bad'     ";  
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q43+=1;}

$sel_query="Select * from feedback where q5 = 'Good'     "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
$q53+=1;}

echo ' <tr>
    <td>What is your opinion about this website: </td>
    <td>'; echo $q11/$countusers*100; echo'</td>';
	
	echo '
    <td>'; echo $q12/$countusers*100; echo ' </td>
    <td>'; echo $q13/$countusers*100; echo'</td></tr>';
	
echo ' <tr>
    <td>What is you child understanding from educational services: </td>
    <td>'; echo $q21/$countusers*100; echo'</td>';
	
	echo '
    <td>'; echo $q22/$countusers*100;echo ' </td>
    <td>'; echo $q23/$countusers*100; echo'</td></tr>';
	
echo ' <tr>
    <td>What is you child benefit from educational services: </td>
    <td>'; echo $q31/$countusers*100; echo'</td>';
	
	echo '
    <td>'; echo $q32/$countusers*100;echo ' </td>
    <td>'; echo $q33/$countusers*100; echo'</td></tr>';
	
echo ' <tr>
    <td>Is entertainment services are suitable for your child ? </td>
  <td>'; echo $q41/$countusers*100; echo'</td>';
	
	echo '
    <td>'; echo $q42/$countusers*100;echo ' </td>
    <td>'; echo $q43/$countusers*100; echo'</td></tr>';
	
echo ' <tr>
    <td>How satisfied are you with the health services provided? </td>
   <td>'; echo $q51/$countusers*100; echo'</td>';
	
	echo '
    <td>'; echo $q52/$countusers*100;echo ' </td>
    <td>'; echo $q53/$countusers*100; echo'</td></tr>';
	

 
 echo'</table>';
					
					
					
						



?>
	
		
		
	
	
	
</div>






<div class="containers" id="container" style="min-height: auto; height:auto;margin-top: 18px;">
	
	
	
	
				
	
			
				<h1 style="color: #00c968;" >Users Comments</h1>
				<div style="float:left;">
				<?php
				$sel_query="Select * from feedback      "; 
$result = mysqli_query($conn,$sel_query);
$counter1=0;
while($row = mysqli_fetch_assoc($result)) { 
$counter1+=1;
echo'<p> <b>Comment'; echo $counter1; echo'</b>------'; ;echo $row['feedback'] ; echo'  </p></br>';

}

?>
				</div>
		
		
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>

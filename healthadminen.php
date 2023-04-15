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
if(isset($_SESSION['health']) && !empty($_SESSION['health'])) {
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
margin-left: 8px;" ><a href="healthadmin.php">العربية</a></li>
  
   

</ul>
</div>

<br>
<center id="formLog">



<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
	
			
				<h1>The Queries</h1>
				
				<?php

						echo '<table style="direction:ltr;">
  <tr>
    <th>Question</th>
    <th>Answer</th>
	<th>Reply</th></tr>';
	 require_once 'DbConnect.php';
						$sel_query="Select * from health  "; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<?php 
echo ' <tr>
    <td>'; echo $row["question"];echo ' </td>
    <td>'; echo $row["answer"]; echo'</td>';
	
	if ($row["answer"]=='لم تتم الاجابة بعد')
	{echo'
	  
    <td><a href="replyen.php?id='; echo $row["id"]; echo '">Reply</a> </td>
</tr>';}

else{
	
	echo'
	  
    <td>Done</a> </td>
</tr>';}

 }
 echo'</table>';
						
					
					
				$answer = 'لم تتم الاجابة بعد';		



?>
	
		
		
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>

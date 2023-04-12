
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="csen.css?=version=6" rel="stylesheet">

<style>

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
 
  <li class="h"><a href="indexen.php"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
 
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
margin-left: 8px;" ><a href="healthservices.php">Health Services</a></li>
	

 <li class="hh" style="
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="">Education Services <div class="dropdown-content">
    <a href="educationalservicesen.php?id=1">English</a>
    <a href="educationalservicesen.php?id=2">Information Technology</a>
   
  </div></a></div></li>
<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="entertainmentservicesen.php">Entertainment Services</a></li>

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="educationalservices.php?id=1">العربية</a></li>
  

</ul>
</div>

<div style=" width:100%; height:60%;text-align:center;margin-top: 157px;">



<?php $id=$_REQUEST['id']; 

if ($id==2)
	
	{ echo '<h1> Information Technology Courses </h1>';}
	if ($id==1)
	
	{ echo '<h1> Englsidh Courses </h1>';}
	?>

<div style=" width:80%; height:20%;float:left;margin-left:10%;border: 2px solid black;
background-color: white;
border-radius: 20px;">

<div style="width: 10%;
height: 100%;
float: right;">

<?php

if ($id==2)
	
	{ echo '<img style="margin-top: 5px;" src="imgs/Ex1.png" height="90%" width="90%">';}
	if ($id==1)
	
	{ echo '<img style="margin-top: 5px;" src="imgs/ENG1.jpg" height="90%" width="90%">';}
	?>
	
	

</div> 

<div style="
width: 40%;

float: right;
margin-top: 33px;
font-size: 24px;">
<?php

if ($id==2)
	
	{ echo 'Learn Excel First Course';}
	if ($id==1)
	
	{ echo 'Learn English First Course';}
	?>
</div> 


<div style="width: 12%;
height: 100%;
float: left;
font-size: 27px;
margin-left: 5px;">
<p class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a style="text-decoration:none;" href="education1en.php">Learn Now</a></p>

</div> 

<!--<img src="imgs/logo.png" height="120" width="230">  <p style="display:inlibe-block;">  hhhhhhhhhhhh</p>  <a style="display:inlibe-block;">hhjj</a>
-->

</div> 

<div style=" width:80%; height:20%;float:left;margin-left:10%;border: 2px solid black;
background-color: white;
border-radius: 20px;margin-top:20px;">

<div style="width: 10%;
height: 100%;
float: right;">

<?php

if ($id==2)
	
	{ echo '<img style="margin-top: 5px;" src="imgs/Ex1.png" height="90%" width="90%">';}
	if ($id==1)
	
	{ echo '<img style="margin-top: 5px;" src="imgs/ENG2.jpg" height="90%" width="90%">';}
	?>

</div> 

<div style="
width: 40%;

float: right;
margin-top: 33px;
font-size: 24px;">

<?php

if ($id==2)
	
	{ echo 'Learn Excel Second Course';}
	if ($id==1)
	
	{ echo 'Learn English Second Course';}
	?>
	
	</div> 


<div style="width: 12%;
height: 100%;
float: left;
font-size: 27px;
margin-left: 5px;">
<p class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a style="text-decoration:none;" href="education1en.php">Learn Now</a></p>

</div> 



</div> 

</div>



</body>
</html>

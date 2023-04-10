
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=6" rel="stylesheet">

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
 
  <li class="h"><a href="#about"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
 
    <?php
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="signout.php">تسجيل الخروج</a></li>';
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;"><a href="update.php">تحديث البيانات</a></li>';
}
else
{   ?>
	
	<?php
	
}
?>
  <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="parentar.php">ولي الامر</a></li>
  
    <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="healthservices.php">الخدمات الصحية</a></li>
	

 <li class="hh" style="
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="">الخدمات التعليمية <div class="dropdown-content">
    <a href="educationalservices.php?id=1">اللغة الانجليزية</a>
    <a href="educationalservices.php?id=2">تقنية معلومات</a>
   
  </div></a></div></li>
<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="entertainmentservices.php">الخدمات الترفيهية</a></li>

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="indexen.html">English</a></li>
  
   

</ul>
</div>

<div style=" width:100%; height:60%;text-align:center;margin-top: 157px;">



<?php $id=$_REQUEST['id']; 

if ($id==2)
	
	{ echo '<h1> كرسات تقنية المعلومات </h1>';}
	if ($id==1)
	
	{ echo '<h1> كورسات اللغة الانجليزية </h1>';}
	?>

<div style=" width:80%; height:20%;float:left;margin-left:10%;border: 2px solid black;
background-color: white;
border-radius: 20px;">

<div style="width: 10%;
height: 100%;
float: right;">
<img style="margin-top: 5px;" src="imgs/ENG1.jpg" height="90%" width="90%">
</div> 

<div style="
width: 40%;

float: right;
margin-top: 33px;
font-size: 24px;">
<?php

if ($id==2)
	
	{ echo 'تعلم الاكسل الكورس الاول';}
	if ($id==1)
	
	{ echo 'تعلم اللغة الإنجليزية الكورس الأول';}
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
margin-left: 8px;" ><a style="text-decoration:none;" href="education1.php">تعلم الان</a></p>

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
<img style="margin-top: 5px;" src="imgs/ENG2.jpg" height="90%" width="90%">
</div> 

<div style="
width: 40%;

float: right;
margin-top: 33px;
font-size: 24px;">

<?php

if ($id==2)
	
	{ echo 'تعلم الاكسل الكورس لثاني';}
	if ($id==1)
	
	{ echo 'تعلم اللغة الإنجليزية الكورس الثاني';}
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
margin-left: 8px;" ><a style="text-decoration:none;" href="healthservices.php">تعلم الان</a></p>

</div> 



</div> 

</div>



</body>
</html>

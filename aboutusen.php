<?php
   session_start();
?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=9" rel="stylesheet">

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

hr{
  width:19%;
  height:0px;
  margin-right: auto;
margin-left: auto;
margin-top: 100px;
margin-bottom: 10px;
border-width: 4px;
}

p{
font-family:'Times New Roman', Times, serif;
  text-align:right;
  direction:rtl;
 font-size:20px;
  width:75%;
  margin-right: auto;
margin-left: auto;
margin-top: 80px;
margin-bottom: 10px;
border-width: 4px;
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
margin-left: 8px;" ><a href="indexen.php">Home Page</a></li>


   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="aboutus.php">العربيه</a></li>
  
   

</ul>
</div>


<h1 style="font-family:'Times New Roman', Times, serif; margin-top:190px;"> WHO ARE WE? </h1> 

<hr style="margin-top:1px;"> </hr>

<p> A website that contributes to providing various electronic services to heroes of determination. Our site provides educational, entertainment,
   and health services simply and understandably for all ages. It also helps the parents of the heroes to record their experiences and evaluation of their children. </p>

  <p>Our website aims to help fill the needs of a large class of society, who are people of determination and heroes. </p>





  <div class="footer">
&copy; INSISTENCE 2023
</div>

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
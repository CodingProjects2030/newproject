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
 <link href="cs.css?=version=7" rel="stylesheet">
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
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="educationalservices.php">الخدمات التعليمية <div class="dropdown-content">
    <a href="#">اللغة الانجليزية</a>
    <a href="#">تقنية معلومات</a>
    <a href="#">اي شي </a>
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

<div id="container" style="margin-top:100px;height:auto;margin-top: 122px;">
  
  <div id="container2" style="height:auto;text-align:right;    background-color: #d4e8d5;">
  <form action="/action_page.php">
 <p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br> 
<p>اذا كان لديك تعليق يرجى ذكره</p>
 <textarea  name="w3review" rows="4" cols="80"></textarea>
 <br> 
<br>  
<button style="    margin-right: 46%;
    background-color: #93ce95;
    color: white;
    font-size: 22px;
    padding: 8px;" type="submit" onclick="hh()" name="login">ارسال</button>
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

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

<div id="container" style="margin-top:100px;height:auto;margin-top: 122px;">
  
  <div id="container2" style="height:auto;text-align:right;    background-color: #d4e8d5;">
 <form style= "height:auto;" role = "form"  id="arra" action="" method = "post">
 <p>:رأيك بالموقع بشكل عام</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="q11" value="Excelent" checked>
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="q12" value="Good">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="q13" value="Bad">
  
<br>  
<p>:مدى استيعاب ابنك \ابنتك للخدمات التعليمية</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="q21" value="Excelent" checked>
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="q22" value="Good">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="q23" value="Bad">
  
<br>  
<p>:مدى استفادة ابنك \ ابنتك من الخدمات التعليمية</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="q31" value="Excelent" checked>
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="q32" value="Good">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="q33" value="Bad">
  
<br> 
<p>:هل الخدمات الترفيهية مناسبة لابنك \ ابنتك </p>
 <label for="html">مناسبة جدا</label>
  <input style="float:rihgt;" type="radio" id="html" name="q41" value="HTML" checked>
  <br>
  <label for="css">نوعا ما</label>
  <input type="radio" id="css" name="q42" value="CSS">
  <br>
  <label for="javascript">غير مناسبة</label>
  <input type="radio" id="javascript" name="q43" value="JavaScript">
  
<br> 
<p>:مدى رضاكم عن الخدمات الصحية المقدمة </p>
<label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="q51" value="Excelent" checked>
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="q52" value="Good">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="q53" value="Bad">
  
<br>
<p>اذا كان لديك تعليق يرجى ذكره</p>
 <textarea  name="feedback" rows="4" cols="80"></textarea>
 <br> 
<br>  
<button style="    margin-right: 46%;
    background-color: #93ce95;
    color: white;
    font-size: 22px;
    padding: 8px;" type="submit" onclick="hh()" name="login">ارسال</button>
	
	<?php
		 require_once 'DbConnect.php';
				

         
			if (isset($_POST['q11']) || isset($_POST['q11']) ||  isset($_POST['q11']) 


			) 
                {
					if (
               isset($_POST['q21']) || isset($_POST['q22']) ||  isset($_POST['q23']) 
			  


			) 
                {
					if (
			   isset($_POST['q31']) || isset($_POST['q32']) ||  isset($_POST['q33']) 
		


			) 
                {
					if (
			   isset($_POST['q41']) || isset($_POST['q42']) ||  isset($_POST['q43']) 


			) 
                {
					if (
			   isset($_POST['q51']) || isset($_POST['q52']) ||  isset($_POST['q53']) 


			) 
                {
					
					
			
          
			
			if ( isset($_POST['q11'])
               ) {
				  
				  
				  if ( isset($_POST['q21'])
               ) {
				  
				   if ( isset($_POST['q31'])
               ) {
				  
				   if ( isset($_POST['q41'])
               ) {
				  
				   if ( isset($_POST['q51'])
               ) {
				  
				  
				  
				  
			   }
			   
			   if ( isset($_POST['q52'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q53'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq41
			   
			   if ( isset($_POST['q42'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q43'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq31
			   
			   if ( isset($_POST['q32'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q33'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }////end q21
			   
			   if ( isset($_POST['q22'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q23'])
               ) {
				  
				  
				  
				  
			   }
			   //
			   
				  
				  
				  
			   }/////////endq11
			   
			   if ( isset($_POST['q12'])
               ) {
				  
				  
				  if ( isset($_POST['q21'])
               ) {
				  
				   if ( isset($_POST['q31'])
               ) {
				  
				   if ( isset($_POST['q41'])
               ) {
				  
				   if ( isset($_POST['q51'])
               ) {
				  
				  
				  
				  
			   }
			   
			   if ( isset($_POST['q52'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q53'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq41
			   
			   if ( isset($_POST['q42'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q43'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq31
			   
			   if ( isset($_POST['q32'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q33'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }////end q21
			   
			   if ( isset($_POST['q22'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q23'])
               ) {
				  
				  
				  
				  
			   }
			   //
			   
				  
				  
				  
			   }/////////endq12
			   
			   
			   if ( isset($_POST['q13'])
               ) {
				  
				  
				  if ( isset($_POST['q21'])
               ) {
				  
				   if ( isset($_POST['q31'])
               ) {
				  
				   if ( isset($_POST['q41'])
               ) {
				  
				   if ( isset($_POST['q51'])
               ) {
				  
				  
				  
				  
			   }
			   
			   if ( isset($_POST['q52'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q53'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq41
			   
			   if ( isset($_POST['q42'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q43'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }//endq31
			   
			   if ( isset($_POST['q32'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q33'])
               ) {
				  
				  
				  
				  
			   }
				  
				  
			   }////end q21
			   
			   if ( isset($_POST['q22'])
               ) {
				  
				  
				  
				  
			   }
			   
			   
			   if ( isset($_POST['q23'])
               ) {
				  
				  
				  
				  
			   }
			   //
			   
				  
				  
				  
			   }/////////endq13
			   
				}
			   else{echo'11111يرجى الاختيار';}  
			   
			   }
			   else{echo'222222يرجى الاختيار';}
			   
			   }
			   else{echo'3333333يرجى الاختيار';}
			   
			   }
			   else{echo'4444444يرجى الاختيار';}
			   
			   }
			   else{echo'555555يرجى الاختيار';}
			   
				  
				  // $q11=$_POST['q11']; 
				
 
					//	$stmt = $conn->prepare("INSERT INTO feedback (userId, q1,q2,q3,q3,q5,feedback) VALUES (?,?,?,?,?,?,?)");
					//	$stmt->bind_param("sssssss", $id, $question, $answer);
						
					//
					//	if($stmt->execute()){
					//	$stmt->close();
							
						
						//	 echo 'شكرا لك , لقد تم ارسال استفسارك بنجاح ';
						//	  header('Refresh: 2; URL = healthservices.php');
						//}
  
   
				   
				   
				   
		
			 //  }
			
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

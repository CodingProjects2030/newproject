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
margin-left: 8px;" ><a href="education1.php?id=1">العربية</a></li>
  

</ul>
</div>

<br>
<center id="formLog">

<div class="containers" id="container" style="min-height: 715px;margin-top: 15px;">
	
	
	
		
			
				<h1>Health Services</h1>
			<?php
 require_once 'DbConnect.php';
$id=$_SESSION['userid'];
$sel_query="Select * from users  where id ='".$id."'"; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<?php  $fullname = $row["fullname"]; 
 $email = $row["email"]; 
  $password = $row["password"]; 
   $sex = $row["sex"]; 
    $height = $row["height"]; 
	 $age = $row["age"]; 
	 $weight = $row["weight"]; 
$disability = $row["disability"]; }


?>

<p> BMI is <br>
<?php $newh = $height / 100;
$newh = $newh * $newh;
$bmi = $weight / $newh;
   echo $bmi; ?>       </p>
   
   <br>
   
		<p> Based on your BMI <br>
<?php if ($bmi <16) {echo 'you suffer from extreme thinness, you must increase your body weight by following a good health system';}
   ?>     
<?php if ($bmi >=16 && $bmi <17) {echo 'You suffer from moderate thinness, you must increase your body weight by following a good health system';}
   ?>  
<?php if ($bmi >=17 && $bmi <18.5) {echo 'تعاني من النحافة الخفيفة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد';}
   ?> 

<?php if ($bmi <18.5 ) {echo 'تعاني من النحافة الخفيفة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد'; echo '<br>'; echo'
 النصائح التالية تساعدك على اكتساب الوزن بطريقة صحية عن طريق اكتساب العضلات والعظام بدون زيادة كتلة الدهون:';echo '<br>'; echo'

كن واقعياً بخصوص نوع جسمك اذا كنت ابن لأبويين نحيفين فالوراثة تلعب دور مهم في طبيعة جسمك، والرياضة والنظام الغذائي يلعبان دور بسيط في هذا الشأن والمهم هو أن تكون بصحة جيدة، عادة الأمر يكون أسهل للأشخاص الذين يرغبون بزيادة وزنهم بعد الجراحة أو المرض.';echo '<br>'; echo'

كن على وعي تام بخصوص الخداع التجاري لبعض المكملات الغذائية لا يوجد هناك شيء (معجزة) لزيادة الوزن، توفير غذاء صحي متكامل أوفر من شراء هذا النوع من المكملات.';echo '<br>'; echo'

ركز على الجودة أولاً ثم الكمية السر في زيادة الوزن هو ان تجعل جميع الأطعمة التي تتناولها عالية في القيمة الغذائية، فتناول الأطعمة الفقيرة في الفيمة الغذائية عالية السعرات مثل (الشيبس، المشروبات الغازية، الحلويات) لا تعتبر الطريقة الصحيحة لبناء العضلات وتقوية العظام والأنسجة';echo '<br>'; echo'

اذا كنت تعاني من ضعف الشهية عليك بتناول 5-6 وجبات في اليوم، وشرب السوائل قبل وبعد الطعام لكي لا تمتلىء المعدة بالسوائل ولترك مساحة أكبر للغذاء.';echo '<br>'; echo'

 قم بزيارة أخصائي التغذية لتخطيط النظام الغذائي الخاص بك ليساعدك على اكتساب الوزن بطريقة صحية مع الأطعمة التي تستمتع بها.';echo '<br>'; echo'

مزاولة الرياضة بصورة منتظمة حيث تقوي العضلات وتفتح الشهية وتقلل من تأثير الضغوط النفسية على الجسم.  ';

   }
   ?> 

  <?php if ($bmi >=18.5 && $bmi <25) {echo '
   
    وزنك طبيعي، تحتاج للمحافظة عليه في المعدل الطبيعي لاتباع النصائح التالية:';echo '<br>'; echo'

اذا كنت تريد المحافظة على وزنك فعليك أن تتبع نظام صحي طويل الأمد يمزج بين الاختيارات الذكية للطعام والتحرك أكثر.';echo '<br>'; echo'

عدم إلغاء أي وجبة من الوجبات الرئيسية وتناول الوجبات في مواعيد ثابتة ومنتظمة';echo '<br>'; echo'

تناول أغذية مختلفة ومتنوعة وبالكميات الصحيحة الموصى بها كما في الهرم الغذائي';echo '<br>'; echo'

التقليل من تناول الأطعمة السكرية والمقلية والمشروبات الغازية.';echo '<br>'; echo'

التقليل من إضافة الملح للطعام والأغذية المعلبة.';echo '<br>'; echo'

التقليل من تناول الوجبات المحضرة خارج المنزل.';echo '<br>'; echo'

يفضل شرب الحليب ومنتجاته قليلة الدسم.';echo '<br>'; echo'

يفضل الإكثار من تناول السمك والدجاج أما اللحوم الحمراء فيكون بشكل معتدل.';echo '<br>'; echo'

الإكثار من تناول الفواكه والخضراوات والبقوليات الغنية بالألياف.';echo '<br>'; echo'

مزاولة الرياضة بشكل منتظم. ';}
?> 

<?php if ($bmi >=25 && $bmi <30) {echo 'You are slightly overweight please follow a healthy diet and exercise as much as possible';}
   ?> 
   <?php if ($bmi >=30 && $bmi <35) {echo 'You suffer from obesity of the first category, please follow a healthy diet and exercise as much as possible';}
   ?> 
   <?php if ($bmi >=35 && $bmi <40) {echo 'you are obese, please follow a healthy diet and exercise as much as possible
';}
   ?> 
    <?php if ($bmi >=40 ) {echo '
 you have type 3 obesity, please eat a healthy diet and exercise as much as possible';}
   ?> 
   </p>	
			
		
			
  
  
	
	
</div>


<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
		<form style= "height:auto;" role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>Ask the nurse</h1>
	
			<textarea name="question" rows="10" cols="90"> </textarea>
			
			<br>
			
		
			
  
  
			<button type="submit" name="signup">Send</button>
			
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
							 echo 'Thanks ';
							  header('Refresh: 2; URL = healthservicesen.php');
						}
  
   
				   
				   
				   
		
			   }
			
         ?>
		</form>
	
	
	
</div>

<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
	
			
				<h1>Your queries</h1>
				
				<?php
$stmt = $conn->prepare("SELECT id FROM health WHERE userid = ?" );
					$stmt->bind_param("s", $id);
					$stmt->execute();
					$stmt->store_result();
					$stmt->bind_result($fullNamee);
							$stmt->fetch();
					
					if($stmt->num_rows > 0){
						echo '<table>
  <tr>
    <th>Question</th>
    <th>Answer</th></tr>';
						$sel_query="Select * from health  where userid ='".$id."'"; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<?php 
echo ' <tr>
    <td>'; echo $row["question"];echo ' </td>
    <td>'; echo $row["answer"]; echo'</td>
    
  </tr>';

 }
 echo'</table>';
						
					}
					else{echo '<p> You dont have queries </p>';}
						



?>
	
		
		
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>

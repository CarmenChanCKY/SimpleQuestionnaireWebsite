<?php
session_start();
?>

<html>

<head>
<title>Record|Questionnaire Website</title>
<!--css style-->
<link rel="stylesheet" type="text/css" href="../mainCSS.css">

</head>

<body>
<!--heading-->
<div class="main_heading"> <a id="top"></a> Questionnaire System
  <p><font size=3>Welcome,
    <?php echo $_SESSION["info"][0];?>. </font></p>
</div>
<!--container-->
<div class="container">
<!--navigation button-->
<div class="navigation">
  <ul>
    <li><a href="main.php">Home</a></li>
    <li><a href="survey.php">Answer the survey</a></li>
    <li><a href="UserInfo.php">User information</a></li>
    <li><a href="record.php">Record</a></li>
    <li><a href="../../index.html">Logout</a></li>
  </ul>
</div>
<!--content-->
<div class="content">
<center>
  <h1><b>Record</b></h1>
</center>

<!--display content-->
<?php
$string="";
$ar=array();
$check=true;

if(strcmp($_SESSION["info"][0],"Chan Mei Mei Amy")==2){
	// if the text file is not exist
	if((file_exists("../../userInfo/amySurvey.txt")==0)){
	$check=false;
}else{
	// retrieve content inside text file
	$ar=file("../../userInfo/amySurvey.txt");
}
}
else if(strcmp($_SESSION["info"][0],"Wong Tai Man Tom")==2){
	// if the text file is not exist
	if(file_exists("../../userInfo/tomSurvey.txt")==0){
	$check=false;
}else{
	// retrieve content inside text file
	$ar=file("../../userInfo/tomSurvey.txt");
	
}
}


if(count($ar)>0){ // check whether the content inside text file is null
	$recordcount=count($ar);
	for($i=0;$i<$recordcount;$i++){
		$string.=$ar[$i]."<br>";
		// output content
		if(($i+1)%7==0&&$i!=0){
			echo $string."<hr>";
			$string="";
		}
	}
}
else{
	$check=false;
}

if(!$check){
	$string="No Record!";
	echo $string;
}
?>

<br>
<!--anchor-->
<a href="#top">Go back to top</a> 
</body>

</html>

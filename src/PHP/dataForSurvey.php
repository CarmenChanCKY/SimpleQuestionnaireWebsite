<?php
session_start();
// set the time zone to Hong Kong
date_default_timezone_set("Asia/Hong_Kong");
// .PHP_EOL mean new line
$store[0]= "Submit date: ".date("Y-m-d")." ". date("h:i:sa").PHP_EOL;
$store[1]= "Purchase date: ".$_POST["date"].PHP_EOL;
$store[2]="Product Number: ".$_POST["productNo"].PHP_EOL;

$product = $_POST["product"];
$temp ="Interested Product: ";
if(count($product)==0){
	$temp.="No";
}
else{
for($i=0;$i<sizeof($product);$i++){
	$temp.=$product[$i];
		if(($i+1)!=sizeof($product)){
		$temp.=", ";
		}
	}
}
$store[3]=$temp.PHP_EOL;
$store[4]= "Satisfy of the service: ".$_POST["satisfy"].PHP_EOL;
$store[5]="Recommend to others: ".$_POST["recommend"].PHP_EOL;

$temp="Message: ";
if($_POST["message"]==""){
	$temp.="No";
}else{
	// return an array created by split a string
	$ar=explode("\n", str_replace("\r", "", $_POST["message"])); 
	foreach($ar as $t){
		$temp.=$t."<br>";
}
}
$store[6]=$temp.PHP_EOL;
$_SESSION["survey"]=$store;

if(strcmp($_SESSION["info"][0],"Chan Mei Mei Amy")==2){
	foreach($store as $temp){	
		// append content to amySurvey.txt
		file_put_contents("../../userInfo/amySurvey.txt", $temp, FILE_APPEND);
		}
}else if(strcmp($_SESSION["info"][0],"Wong Tai Man Tom")==2){
	foreach($store as $temp){	
		// append content to tomSurvey.txt
		file_put_contents("../../userInfo/tomSurvey.txt", $temp, FILE_APPEND);
		}
}

// open record page
header("Location:record.php");
exit();
?>
<?php
session_start();
?>
<html>
<head>
<title>User Information|Questionnaire Website</title>
<!--css style-->
<link rel="stylesheet" type="text/css" href="../mainCSS.css">

</head>

<body>
<!--header-->
<div class="main_heading"> Questionnaire System
  <p><font size=3>Welcome, <?php echo $_SESSION["info"][0]; ?>. </font></p>
</div>
<!--container-->
<div class="container">
<!--navigation menu-->
<?php
include "../component/navigation.html"
?>
<!--content-->
<div class="content">
  <center>
    <h1>User Information</h1>
  </center>
  <!--display content-->
  <?php
echo "Name: " . $_SESSION["info"][0] . "<br>";
echo "Email address: " . $_SESSION["info"][1] . "<br>";
echo "Phone number: " . $_SESSION["info"][2] . "<br>";
echo "Home address: " . $_SESSION["info"][3] . "<br>";
?>
    <!--update information-->
  <button type="button" onClick="go()">Update your Information</button>
</div>

<script language="javascript">
function go(){
	window.open("UpdateUserInfo.php","_self");
}
</script>

</body>
</html>

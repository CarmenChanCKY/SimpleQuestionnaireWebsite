<?php
session_start();
?>

<html>

<head>
<title>Home|Questionnaire Website</title>
<!--css style for this page-->
<link rel="stylesheet" type="text/css" href="../mainCSS.css">
</head>

<body>
<!--header-->
<div class="main_heading"> Questionnaire System
  <p><font size=3>Welcome, <?php echo $_SESSION["info"][0]; ?>. </font> </p>
</div>
<!--container-->
<div class="container">
  <!--navigation button-->
  <?php
include "../component/navigation.html"
?>
  <!--main content-->
  <div class="content">
    <center>
      <h1><b>Welcome to Questionnaire System</b></h1>
      <img src="../../pic/survey.jpg">
      <p>Please choose "Answer the survey" to provide some feedback for us and check your 			previous survey record at "Record".<br>
        You can check and update your personal information through "User information" </p>
    </center>
  </div>
</div>
</body>

</html>

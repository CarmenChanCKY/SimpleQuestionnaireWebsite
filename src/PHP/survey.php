<?php
session_start();
?>
<html>
<head>
<title>Survey|Questionnaire Website</title>
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
  <!--navigation button-->

    <?php
include "../component/navigation.html"
?>

  <!--Main content-->
  <div class="content">
  <p>

  <center>
    <h1>Survey</h1>
  </center>
  </p>

  <!--Survey-->
  <form name = "survey" action = "dataForSurvey.php" method = "POST">
    <p> When did you use our services? <font color = "red">*</font><br>
      <input type = "date" name="date" id = "date">
    </p>
    <p> Please provide the product number. <font color = "red">*</font><br>
      <input type="text" name = "productNo" id = "productNo" maxlength="15">
    </p>
    <p> Which type of products are you interested?
    <font color = "grey">
    <h6>Please press the control button to choose multiple products.</h6>
    </font><br>
    <select name = "product[]" size = "5" multiple>
      <option value = "Clothes">Clothes</option>
      <option value = "Home appliance">Home appliance</option>
      <option value = "Smartphone">Smartphone</option>
      <option value = "Commodity">Commodity</option>
      <option value = "Furniture">Furniture</option>
    </select>
    </p>
    <p> Do you satisfy our services? <font color = "red">*</font><br>
      <label class="radio">
        <input type = "radio" name = "satisfy" value = "Yes" id="satisfyY">
        Yes <span class="radiobutton"></span> </label>
      <label class="radio">
        <input type = "radio" name = "satisfy" value = "No" id="satisfyN">
        No <span class="radiobutton"></span> </label>
      <label class="radio">
        <input type = "radio" name = "satisfy" value = "No Comment" id="satisfyNC">
        No Comment <span class="radiobutton"></span> </label>
    </p>
    <p> Will you recommend our services to others? <font color = "red">*</font><br>
      <label class="radio">
        <input type = "radio" name = "recommend" value = "Yes" id="recommendY">
        Yes <span class="radiobutton"></span> </label>
      <label class="radio">
        <input type = "radio" name = "recommend" value = "No" id="recommendN">
        No <span class="radiobutton"></span> </label>
      <label class="radio">
        <input type = "radio" name = "recommend" value = "No Comment" id="recommendNC">
        No Comment <span class="radiobutton"></span> </label>
    </p>
    <p> Please give us some comments.<br>
      <textarea name="message" rows="10" cols="70"></textarea>
    </p>
    </p>
    <p> <font color = "red">*</font> = required<br>
      <input type = "submit" name = "submit" value = "Submit" onClick="return checkSurveyForm(this.form)">
      <input type = "reset" name = "reset" value = "Reset">
    </p>
    </div>
  </form>
</div>
<script language="javascript">
function checkSurveyForm(form){
if(document.getElementById("date").value==""||document.getElementById("productNo").value==""
	||!(document.getElementById("satisfyY").checked||document.getElementById("satisfyN").checked
	||document.getElementById("satisfyNC").checked)
	||!(document.getElementById("recommendY").checked||document.getElementById("recommendN").checked
	||document.getElementById("recommendNC").checked)){ // confirm all the input with required condition is not null
		alert("Please fill in all the required field!");
		return false;
	}
else if(document.getElementById("date").value>maxDate()){ //validate the input date
	alert("Your date cannot exceed the actual date!");
	return false;
	}
else{
	return confirm("Do you want to submit your survey?");
	}
}

// store today's date
function maxDate(){
	var date =new Date().toISOString().split('T')[0];
	return date;
}
</script>
</body>
</html>
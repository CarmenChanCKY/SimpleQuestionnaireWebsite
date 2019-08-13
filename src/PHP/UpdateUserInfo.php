<?php
session_start();
?>
<html>
<head>
<title>Update|Questionnaire Website</title>
<!--apply css style-->
<link rel="stylesheet" type="text/css" href="../mainCSS.css">
</head>

<body>
<!--heading-->
<div class="main_heading"> Questionnaire System
  <p><font size=3>Welcome, <?php echo $_SESSION["info"][0]; ?>. </font></p>
</div>
<!--container-->
<div class="container">
  <!--navigation button-->
  <?php
include "../component/navigation.html"
?>
  <!--content-->
  <div class="content">
    <p>
    <center>
      <h1>Update your Information</h1>
    </center>
    </p>
    <!--form that used to update user information-->
    <form name="updateform" action = "dataForUserInfo.php" method = "post">
      <div class="form">
        <p>
          <label for="email">Email</label>
          <br>
          <input type = "email" name = "email">
        </p>
        <p>
          <label for="phone">Phone number</label>
          <br>
          <input type = "text" name = "phone" maxlength = "8">
        </p>
        <p>
          <label for="address">Address</label>
          <br>
          <input type = "text" name = "address">
        </p>
        <p>
          <input type = "submit" value = "Submit" onClick="return checkUserInfoForm(this.form)">
          <input type = "reset" value = "Reset">
        </p>
      </div>
    </form>
  </div>
</div>
<script language="javascript">
function checkUserInfoForm(form){
	// if the three text fields are both null
if(form.email.value==""&&form.phone.value==""&&form.address.value==""){
	alert("Please change at least one of the information!");
	return false;
	}
else if(confirm("Doy you want to submit the information?")){
	return true;
	}
}
</script>
</body>
</html>
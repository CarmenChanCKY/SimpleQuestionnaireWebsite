<?php
session_start();
if ($_POST['username'] == "Amy_Chan") {
    $info = file("../../userInfo/amy.txt"); // retrieve the content inside amy.txt
    $_SESSION["info"] = $info;
} else if ($_POST['username'] == "Tom_Wong") {
    $info= file("../../userInfo/tom.txt"); // retrieve the content inside tom.txt
    $_SESSION["info"] = $info;
}

// open the main page
header("Location:main.php");
exit();
?>

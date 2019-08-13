<?php
session_start();
if ($_POST["email"] != "") {
    $_SESSION["info"][1] = $_POST["email"] . PHP_EOL;
}
if ($_POST["phone"] != "") {
    $_SESSION["info"][2] = $_POST["phone"] . PHP_EOL;
}
if ($_POST["address"] != "") {
    $_SESSION["info"][3] = $_POST["address"] . PHP_EOL;
}

if (strcmp($_SESSION["info"][0], "Chan Mei Mei Amy") == 2) {
    file_put_contents("../../userInfo/amy.txt", ""); // clear the content inside amy.txt
    foreach ($_SESSION["info"] as $temp) {
        file_put_contents("../../userInfo/amy.txt", $temp, FILE_APPEND);
    }
} else if (strcmp($_SESSION["info"][0], "Wong Tai Man Tom") == 2) {
    file_put_contents("../../userInfo/tom.txt", ""); // clear the content inside tom.txt
    foreach ($_SESSION["info"] as $temp) {
        file_put_contents("../../userInfo/tom.txt", $temp, FILE_APPEND);
    }
}

// call user information page
header("Location:UserInfo.php");
exit();

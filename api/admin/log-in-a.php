<?php
    require "../config.php";
    //greeni3sn0wie
    if(isset($_POST["password"])) {
        $checkp = hash('sha256', $_POST["password"]);
        if($checkp == "e3b7bf3a0017f094f8ef2d6414163f84ebd5ab0915f885ae58bd281f10bc8fea") {
            $_SESSION["password"] = "cd266770485788344504f162552237244c3f0a5aae9527165f55dccc3d05353b";
            header("Location: https://greeniesnowie.ca/admin/");
        }
        else {
            changeHead("$sitelink/admin/log-in.php");
        }
    }
?>
<?php
    require "../config.php";
    require "shared.php";

    if($_SESSION["password"] !== "cd266770485788344504f162552237244c3f0a5aae9527165f55dccc3d05353b") {
        changeHead("$sitelink/admin/log-in.php");
    }
    else {
        if(isset($_GET["em"])) {
            $em = $_GET["em"];
            $sql = "DELETE FROM `mailing` WHERE 'email' = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)) {}
            else {
                mysqli_stmt_bind_param($stmt,"s",$em);
                mysqli_stmt_execute($stmt);
            }
            changeHead("$sitelink/admin/newsletter.php");
        }
    }
?>
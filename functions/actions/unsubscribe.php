<?php
    require "../config.php";

    if(isset($_GET["em"])) {
        $em = $_GET["em"];

        $sql = "DELETE FROM `mailing` WHERE 'email' = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {}
        else {
            mysqli_stmt_bind_param($stmt,"s",$em);
            mysqli_stmt_execute($stmt);
        }
        changeHead("$sitelink?u=uns");
    }
?>
<html>
    
</html>
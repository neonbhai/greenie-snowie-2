<?php
    require "../config.php";

    if(isset($_POST["email"])) {
        $email = $_POST["email"];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $findemail = SQL("SELECT COUNT(*) FROM `mailing` WHERE email = ?","s",$email);
            if($findemail[0][0] == 0) {
                $sql = "INSERT INTO `mailing`(email, date) VALUES(?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)) {echo "9";}
                else {
                    mysqli_stmt_bind_param($stmt,"ss",$email,$date);
                    mysqli_stmt_execute($stmt);
                    echo "7";
                }
            }
            else {echo "10";}
        }
        else {echo "8";}
    }
    else {echo "8";}
?>
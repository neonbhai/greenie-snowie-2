<?php
    require "../config.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    $first_name = htmlspecialchars($_POST["first-name"], ENT_QUOTES, 'UTF-8');
    $last_name = htmlspecialchars($_POST["last-name"], ENT_QUOTES, 'UTF-8');
    $phone = $_POST["phone-number"];
    $email = $_POST["email"];
    $request = htmlspecialchars($_POST["request"], ENT_QUOTES, 'UTF-8');

    if(strlen($first_name) > 1 && strlen($last_name) > 1 && strlen($phone) > 1 && strlen($email) > 1 && strlen($request) > 1) {
        if(preg_match('/^[a-zA-Z\s-]+$/', $first_name) && preg_match('/^[a-zA-Z\s-]+$/', $last_name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[0-9\s\-\(\)+]+$/', $phone)) {
            $to = "contact@greeniesnowie.com";
            $subject = "New Website Request from $first_name";
            $message = "From: $first_name $last_name<br>";
            $message .= "Email: $email<br>";
            $message .= "Phone Number: $phone<br>";
            $message .= "Request: $request<br>";
            $headers = "From: contact@greeniesnowie.com";

            mail($to, $subject, $message, $headers);
            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'ssl://smtp.zoho.com';
            $mail->Port = 465;
            $mail->Username = "parkinnovates@gmail.com";
            $mail->Password = 'QuxqvNyCzC19';
            $mail->SMTPSecure = 'ssl';
            $mail->From = 'parkinnovates@gmail.com';
            $mail->FromName = "GreenieSnowie";
            $mail->addAddress("contact@greeniesnowie.com","$first_name");
            $mail->SetFrom("parkinnovates@gmail.com","$first_name");
            $mail->Priority = 1;
            $mail->AddCustomHeader("X-MSMail-Priority: High");
            $mail->isHTML(true);
            $mail->Subject = "$subject";
            $mail->Body = "$message";
            $mail->AltBody = "$message";
    
            if(!$mail->Send()) {
                echo $mail->ErrorInfo;       
            }

            $sql = "INSERT INTO `sent-mail`(mfrom,context, date) VALUES(?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)) {}
            else {
                mysqli_stmt_bind_param($stmt,"sss",$email,$message,$date);
                mysqli_stmt_execute($stmt);
            }
            echo "0";
        }
        else {
            if(!preg_match('/^[a-zA-Z\s-]+$/', $first_name)) {echo "2";}
            if(!preg_match('/^[a-zA-Z\s-]+$/', $last_name)) {echo "3";}
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo "4";}
            if(!preg_match('/^[0-9\s\-\(\)+]+$/', $phone)) {echo "5";}
        }
    }
    else {echo "1";}
?>
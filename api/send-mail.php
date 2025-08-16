<?php
    $first_name = htmlspecialchars($_POST["first-name"], ENT_QUOTES, 'UTF-8');
    $last_name = htmlspecialchars($_POST["last-name"], ENT_QUOTES, 'UTF-8');
    $phone = $_POST["phone-number"];
    $email = $_POST["email"];
    $request = htmlspecialchars($_POST["request"], ENT_QUOTES, 'UTF-8');

    $turnstileToken = $_POST['cf-turnstile-response'];
    $secretKey = '0x4AAAAAAAeuMttfGxz7iukvnZwo4iTSQmw';
    $verifyUrl = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $turnstileToken
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verifyUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $responseData = json_decode($response, true);
    if ($responseData['success']) {
        if(strlen($first_name) > 1 && strlen($last_name) > 1 && strlen($phone) > 1 && strlen($email) > 1 && strlen($request) > 1) {
            if(preg_match('/^[a-zA-Z\s-]+$/', $first_name) && preg_match('/^[a-zA-Z\s-]+$/', $last_name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[0-9\s\-\(\)+]+$/', $phone)) {
                $to = "contact@greeniesnowie.com";
                $subject = "New Website Request from $first_name";
                $message = "From: $first_name $last_name\n";
                $message .= "Email: $email\n";
                $message .= "Phone Number: $phone\n";
                $message .= "Request: $request\n";
                $headers = "From: site-contact@greeniesnowie.com";

                mail($to, $subject, $message, $headers);
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
    }
    else {echo "1";}
?>
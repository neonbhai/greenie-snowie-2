<?php
    require "../config.php";
    require "shared.php";

    if($_SESSION["password"] !== "cd266770485788344504f162552237244c3f0a5aae9527165f55dccc3d05353b") {
        changeHead("$sitelink/admin/log-in.php");
    }
    else {
        $totalnewsletter = SQL("SELECT * FROM `mailing` ORDER BY date DESC","","");
        $prep = "";
        foreach($totalnewsletter as $newsletter) {
            $prep .= "
                <div class='nl-in' id='".$newsletter['id']."-nl'>
                    <input type='hidden' name='".$newsletter['id']."-nl' value='".$newsletter['email']."'>
                    <div class='wrap-first'>
                        <p class='s3 white line-3'>".$newsletter['email']."</p>
                        <p class='s6 white line-3'>Subscribed since ".$newsletter['date']."</p>
                    </div>

                    <div class='wrap-second'>
                        <a href='$sitelink/admin/delete-user.php?em=".$newsletter['email']."'><img src='https://xenons.net/iconsets/line/delete.svg' class='icon delete-email inline' /></a>
                        <img src='https://xenons.net/iconsets/line/copy.svg' class='icon copy-email inline' />
                    </div>
                </div>
            ";
        }
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel for GreenieSnowie</title>
    <meta property="og:title" content="Panel for GreenieSnowie" />
    <meta name="twitter:title" content="Panel for GreenieSnowie">
    <meta property="og:description" content="Admin panel for Greenie Snowie" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$sitelink?>" />
    <meta property="og:image" content="<?=$sitelink?>/https://greeniesnowie.com/assets/logo.png" />
    <meta name="twitter:image" content="<?=$sitelink?>/https://greeniesnowie.com/assets/logo.png">
    <meta name="author" content="Xenons" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://greeniesnowie.com/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://greeniesnowie.com/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://greeniesnowie.com/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://greeniesnowie.com/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://greeniesnowie.com/assets/favicon/safari-pinned-tab.svg" color="#00704a">
    <link rel="shortcut icon" href="https://greeniesnowie.com/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00704A">
    <meta name="msapplication-config" content="https://greeniesnowie.com/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#00704A">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/dev.css?v=<?=$date?>">
    <link rel="stylesheet" href="../style/admin.css?v=<?=$date?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin panel for Greenie Snowie" />
    <meta name="keywords" content="greenie, snowie, landscaping" />
    <meta name="target" content="all" />
    <meta name="audience" content="all" />
    <meta name="coverage" content="Worldwide" />
    <meta name="distribution" content="Global">
    <meta name="og:type" content="website" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="loading">
        <div class="square-img">
            <img src="https://greeniesnowie.com/assets/logo/logo-left.png" alt="" class="square-in l-l">
            <img src="https://greeniesnowie.com/assets/logo/logo-right.png" alt="" class="square-in l-r">
        </div>
        <h4 class="black line-3">Loading...</h4>
    </div>

    <main>
        <?=$menu_left?>
        <section class="panel-content">
            <div class="wrap-newsletters">
                <?=$prep?>
            </div>
        </section>
    </main>

    <script>
        $(document).on('click', '.copy-email', function() {
            var input = $(this).closest(".nl-in").find('input');
            if (input.length > 0) {
                var value = input.val();
                var tempTextarea = $('<textarea>').val(value).appendTo('body').select();

                try {document.execCommand('copy');}
                catch (err) {console.error('Failed to copy text: ', err);}
                tempTextarea.remove();
                sthis = $(this);
                sthis.addClass("copied");
                setTimeout(() => {
                    sthis.removeClass("copied");
                }, 800);
            } else {
                console.warn('No input found within the clicked .nl-in element');
            }
        });

        $(document).ready(function() {
            setTimeout(() => {
                $(".loading").fadeOut(300);
            }, 500);
        });
    </script>
</body>
</html>
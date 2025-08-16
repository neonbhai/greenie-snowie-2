<?php
    require "config.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenie</title>
    <meta property="og:title" content="Greenie" />
    <meta name="twitter:title" content="Greenie">
    <meta property="og:description" content="Description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$sitelink?>" />
    <meta property="og:image" content="<?=$sitelink?>/assets/logo.png?v=1.002" />
    <meta name="twitter:image" content="<?=$sitelink?>/assets/logo.png?v=1.002">
    <meta name="author" content="Xenons" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$sitelink?>/assets/favicon/apple-touch-icon.png?v=1.002">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$sitelink?>/assets/favicon/favicon-32x32.png?v=1.002">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$sitelink?>/assets/favicon/favicon-16x16.png?v=1.002">
    <link rel="manifest" href="<?=$sitelink?>/assets/favicon/site.webmanifest?v=1.002">
    <link rel="mask-icon" href="<?=$sitelink?>/assets/favicon/safari-pinned-tab.svg?v=1.002" color="#00704a">
    <link rel="shortcut icon" href="<?=$sitelink?>/assets/favicon/favicon.ico?v=1.002">
    <meta name="msapplication-TileColor" content="#00704A">
    <meta name="msapplication-config" content="<?=$sitelink?>/assets/favicon/browserconfig.xml?v=1.002">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/main.css?v=2.000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description" />
    <meta name="keywords" content="key, words" />
    <meta name="target" content="all" />
    <meta name="audience" content="all" />
    <meta name="coverage" content="Worldwide" />
    <meta name="distribution" content="Global">
    <meta name="og:type" content="website" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    var _paq = window._paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//xenons.net/teskianalytics/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '3']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <noscript><p><img src="//xenons.net/teskianalytics/matomo.php?idsite=3&amp;rec=1" style="border:0;" alt="" /></p></noscript>
</head>
<body>
    <div class="loading">
        <div class="square-img">
            <img src="<?=$sitelink?>/assets/logo/logo-left.png?v=1.002" alt="" class="square-in l-l">
            <img src="<?=$sitelink?>/assets/logo/logo-right.png?v=1.002" alt="" class="square-in l-r">
        </div>
        <h4 class="black line-3">Loading...</h4>
    </div>
    <menu class="active-menu">
        <div class="left-side">
            <a class="logo-left change-season"><img src="<?=$sitelink?>/assets/logo/icon.png?v=1.001" alt="" class="logo-menu"></a>
        </div>
        <div class="right-side">
            <a href="#welcome" class="menu-link white s4">About Us</a>
            <a href="#experience" class="menu-link white s4">Our Experience</a>
            <a href="#pricing" class="menu-link white s4">Pricing</a>
            <a href="#contact" class="menu-link white s4">Get In Touch</a>
        </div>
    </menu>
    <main>
        <section class="tos-section">
            <article class="line-3 black">
                <h1 class="black bold center">Terms of Services</h1>

                <font class="bold">Service Description:</font>
                Greenie & Snowie (“we”, “us”, “our”) offers snow removal, landscaping, hardscaping, and other related
                services for residential properties in Toronto, Ontario, Canada.

                <font class="bold">Liability Disclaimer:</font>
                Greenie & Snowie shall not be held liable for any damages, injuries, or losses that may occur, including
                but not limited to property damage, slips, falls, or accidents on the property before, during, or after our
                services.

                <font class="bold">Snowfall Threshold:</font>
                Greenie & Snowie will commence snow removal operations when snow accumulation reaches or exceeds
                4 centimetres. If the snowfall is less than 4 centimetres, we may apply ice melter to specific areas upon the
                homeowner’s direction.

                <font class="bold">Fall/Spring Cleanup:</font>
                Greenie & Snowie commits to performing a minimum of two (2) cleanup visits during each of the fall and
                spring seasons. Additional visits may be scheduled based on the specific needs of the property and at the
                sole discretion of Greenie & Snowie. These visits aim to maintain the cleanliness and health of the
                property during these transitional seasons.

                <font class="bold">Payment Terms:</font>
                All payments for Greenie & Snowie’s services are non-refundable. Payment is due upon receipt of the
                invoice or as agreed upon in a separate written agreement between Greenie & Snowie and the homeowner.

                <font class="bold">Payment Obligation:</font>
                Homeowners are obligated to pay the full amount for Greenie & Snowie’s services unless an alternative
                payment arrangement has been mutually agreed upon in writing.

                <font class="bold">Service Execution:</font>
                Greenie & Snowie will make reasonable efforts to execute our services promptly and efficiently within the
                agreed-upon time frame. However, service may be delayed, interrupted, or canceled due to factors beyond
                our control, including but not limited to extreme weather conditions, natural disasters, or other unforeseen
                circumstances.

                <font class="bold">Access to Property:</font>
                Homeowners are responsible for ensuring Greenie & Snowie has unimpeded access to the property for
                service delivery. This includes, but is not limited to, clearing pathways, ensuring gates are unlocked, and
                removing any obstacles that may hinder the service process. Failure to provide adequate access to the
                property may result in our inability to complete the service.

                <font class="bold">Changes or Cancellations:</font>
                Once the service period has commenced, any requested changes to the service schedule must be
                communicated to Greenie & Snowie in advance. Customers may not cancel services mid-month;
                cancellations are only permitted on the last day of the month to prevent services in the subsequent month.
                Clients wishing to discontinue services are still obligated to pay the entire invoice for that month. Any
                cancellation must be communicated at least one (1) month in advance. Failure to provide such notice will
                result in the client being responsible for full payment of the upcoming month’s services. Greenie & Snowie
                reserves the right to charge a cancellation fee or the full amount for services already underway or
                completed, regardless of any subsequent cancellation requests.

                <font class="bold">Indemnification:</font>
                Homeowners agree to indemnify and hold Greenie & Snowie harmless from any claims, liabilities,
                damages, or expenses arising out of or related to the services provided by Greenie & Snowie, except in
                cases of gross negligence or willful misconduct.

                <font class="bold">Severability:</font>
                If any provision of these terms and conditions is deemed invalid or unenforceable, the remaining
                provisions shall remain in full force and effect.

                <font class="bold">Governing Law:</font>
                These terms and conditions shall be governed by and construed in accordance with the laws of the
                province of Ontario, Canada.

                By engaging Greenie & Snowie’s services, homeowners acknowledge that they have read, understood, and
                agreed to abide by these terms and conditions.
                For any inquiries or concerns regarding these terms and conditions, please contact Greenie & Snowie
                directly
            </article>
        </section>
    </main>
<script>

    $(document).ready(function() {
        setTimeout(() => {
            $(".loading").fadeOut(300);
        }, 500);
    });
</script>
</body>
</html>
<?php
    require "config.php";

    $cdomain = $_SERVER['SERVER_NAME'];

    $swp = 0;
    if(isset($_GET["p"])) {
        if($_GET["p"] == "snowie" OR $_GET["p"] == "greenie") {
            $page = $_GET["p"];
            $swp = 1;
        }
        else {$page = "greenie";}
    }
    else {$page = "greenie";}

    //Change this if  you want to move the times between sites
    //this basically means that from november 1st up until april 15th the default page will be snowie
    $datetosnowie = new DateTime('November 1st');
    $datetogreenie = new DateTime('April 15th');
    if($swp == 0) {
        if($page == "greenie" AND new DateTime() >= $datetosnowie) {$page = "snowie";}
        else if($page == "snowie" AND new DateTime() >= $datetogreenie) {$page = "greenie";}
    }
    $uns = 0;
    if(isset($_GET["u"])) {$uns = 1;}

    
    $title = ucfirst($page);

    //GREENIE ARRAY
    $accent["greenie"] = ":root {--c-accent: #00704A;--s3-accent: rgba(0, 112, 74, 0.3);--c-accentbg: #001E14;--s0-accentbg: rgba(0, 30, 20, 0);}";
    $pagecontent["greenie"]["header"] = "
        <button class='to-contact inline'><h3 class='white center'>Get In Touch</h3></button>
        <p class='s5 thin inline'>Or</p>
        <p class='s4 white inline change-season pointer'>Check Out Snowie</p>
    ";
    $pagecontent["greenie"]["introduction"] = "Introducing Greenie - your go-to for all things garden and lawn! Since our start in early 2021 as a local landscaping service in midtown Toronto, we've tackled everything that was thrown at us. What sets us apart? We're committed to quality and affordability, ensuring everyone can enjoy a beautiful outdoor space no matter what. Think of us as your property's superheroes, licensed exterminators by the Ministry of Environment, dedicated to delivering top-notch service every time.";
    $pagecontent["greenie"]["introduction-image"] = "$sitelink/assets/greenie/gallery/3-min.jpg";
    
    $pagecontent["greenie"]["customize-title"] = "Customize With <font class='accent'>Greenie</font>";
    $pagecontent["greenie"]["customize"] = "At Greenie, we're all about delivering top-notch quality without breaking the bank! We know
one-size-fits-all just doesn't cut it, which is why we offer unique and customizable services to
our subscribed clients. Whether it's a unique one-time job or a recurring service, Greenie's got
your back! And guess what? We're also price matching so you won't find a better deal
anywhere else!";

    $pagecontent["greenie"]["service"] = "$sitelink/assets/greenie/gallery/5-min.jpg";
    $pagecontent["greenie"]["contact"] = "$sitelink/assets/greenie/gallery/10-min.jpg";

    $pagecontent["greenie"]["ifleaf"] = "<img src='$sitelink/assets/greenie/leafs.png' alt='' class='leaf-above'>";
    $pagecontent["greenie"]["ifleafi"] = "ı";

    $pagecontent["greenie"]["textlogo"] = "green-w-icon";

    $experiences["greenie"] = [
        "Cleanup",
        "Lawn Care & Garden Care",
        "Garden Care",
        "Lawn Care & Garden Care",
        "Lawn Care & Garden Care",
        "Lawn Care & Garden Care",
        "Garden Care",
        "Garden Installation",
        "Stone Path Repair"
    ];
    $pagecontent["greenie"]["randomized"] = rand(1, 9);
    $pagecontent["greenie"]["randomized-2"] = rand(1, 9);

    $pagecontent["greenie"]["prices"] = "
            <div class=\"prices-grid\">
                <div class=\"wrap-price center\">
                    <p class=\"s4 black\">Starting From</p>
                    <p class=\"s1 accent bold pricing\">$300</p>
                    <p class=\"s4 black after-price\">Per Month</p>
                    <p class=\"s3 black line-3\">Essential Maintenance</p>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Lawn Care:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Cut</li>
                                    <li class=\"s4 black noselect\">Trim</li>
                                    <li class=\"s4 black noselect\">Blow</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Garden Maintenance:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Weeding</li>
                                    <li class=\"s4 black noselect\">Hedge Trimming</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Spring & Fall Clean-Up:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Perennial Cutbacks</li>
                                    <li class=\"s4 black noselect\">Removal Of Annuals</li>
                                    <li class=\"s4 black noselect\">Winterizing Evergreens</li>
                                    <li class=\"s4 black noselect\">Lawn Edging</li>
                                    <li class=\"s4 black noselect\">Garden Clean-Up</li>
                                    <li class=\"s4 black noselect\">Pruning</li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center black pricing-description line-3\">
                        Get ready for maintenance made easy with our must-have Essential Maintenance
                        subscription! Let us handle the dirty work while you sit back and relax. From lawn care to
                        garden weeding and seasonal cleanups, we'll keep your place looking pristine and tailored just
                        for you!
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
                <div class=\"wrap-price center featured\">
                    <p class=\"s4 white\">Starting From</p>
                    <p class=\"s1 white bold pricing\">$350</p>
                    <p class=\"s4 white after-price\">Per Month</p>
                    <p class=\"s3 white line-3\">Premium Maintenance</p>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect white\">Lawn Care:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 white noselect\">Cut</li>
                                    <li class=\"s4 white noselect\">Trim</li>
                                    <li class=\"s4 white noselect\">Blow</li>
                                    <li class=\"s4 white noselect\">Fertilize</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect white\">Garden Maintenance:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 white noselect\">Weeding</li>
                                    <li class=\"s4 white noselect\">Hedge Trimming</li>
                                    <li class=\"s4 white noselect\">Pruning</li>
                                    <li class=\"s4 white noselect\">Small Tree Pruning</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect white\">Spring & Fall Clean-Up:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 white noselect\">Perennial Cutbacks</li>
                                    <li class=\"s4 white noselect\">Removal Of Annuals</li>
                                    <li class=\"s4 white noselect\">Winterizing Evergreens</li>
                                    <li class=\"s4 white noselect\">Lawn Edging</li>
                                    <li class=\"s4 white noselect\">Garden Clean-Up</li>
                                    <li class=\"s4 white noselect\">Pruning</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect white\">Weed Control / Pesticides:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 white noselect\">Lawn</li>
                                    <li class=\"s4 white noselect\">Walkway</li>
                                    <li class=\"s4 white noselect\">Driveway</li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center white pricing-description line-3\">
                        With our Premium Maintenance subscription, we don't just stop at the essentials. From
                        tackling weeds and invasive insects in every nook and cranny to ensuring your lawn and
                        garden looks its best, we've got you covered with safe and authorised products. Welcome a
                        picture-perfect property with Greenie!
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
                <div class=\"wrap-price center\">
                    <p class=\"s1 accent bold pricing\">Per Request</p>
                    <p class=\"s3 black line-3\">Custom Services</p>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Lawn Care:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Lawn Reseeding</li>
                                    <li class=\"s4 black noselect\">Lawn Aeration</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Add-Ons / Top Ups:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Composting</li>
                                    <li class=\"s4 black noselect\">Mulching</li>
                                    <li class=\"s4 black noselect\">Soil</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Plants / Tree:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Seasonal Planting</li>
                                    <li class=\"s4 black noselect\">Tree Pruning</li>
                                    <li class=\"s4 black noselect\">Tree Removal</li>
                                    <li class=\"s4 black noselect\">Tree Planting</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Seasonal Floral Displays:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Prune</li>
                                    <li class=\"s4 black noselect\">Fertilize / Watering</li>
                                    <li class=\"s4 black noselect\">Installation</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Hardscape:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Path Renovation</li>
                                    <li class=\"s4 black noselect\">Path Installation</li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center black pricing-description line-3\">
                        Only For Our Clients,
                        Ready to elevate your property even further? Got a special request? Consider it done! Don't
                        see it on our list? No sweat - just give us a shout, and chances are, we'll make it happen!
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
            </div>
            ";

    $pagecontent["greenie"]["seasonal"] = "April 1st - November 30th";

    //SNOWIE ARRAY
    $accent["snowie"] = ":root {--c-accent: #2F5288;--s3-accent: rgba(47, 82, 136, 0.3);--c-accentbg: #00111e;--s0-accentbg: rgba(0, 20, 30, 0);}";
    $pagecontent["snowie"]["header"] = "
        <button class='to-contact inline'><h3 class='white center'>Get In Touch</h3></button>
        <p class='s5 thin inline'>Or</p>
        <p class='s4 white inline change-season pointer'>Check Out Greenie</p>
    ";
    $pagecontent["snowie"]["introduction"] = "Introducing Snowie - your ultimate snow removal hero! Since our debut in early 2021 in midtown Toronto, we've conquered every snowflake and blizzard that came our way. What makes us stand out? Our mix of quality and affordability, making sure everyone can enjoy a snow-free property during the harsh Canadian winter. Picture us as property's superheroes, always on standby and dedicated to delivering top-notch service every single time. With Snowie, say goodbye to winter worries!";
    $pagecontent["snowie"]["introduction-image"] = "$sitelink/assets/snowie/gallery/2-min.jpg";

    $pagecontent["snowie"]["customize-title"] = "Beat Winter With <font class='accent'>Snowie</font>";
    $pagecontent["snowie"]["customize"] = "At Snowie, we're all about delivering top-notch quality without breaking the bank!
We know one-size-fits-all just doesn't cut it, which is why we offer unique and
customizable options and services to our clients. Whether it's special ice melter,
or clearing snow from cars, Snowie's got your back! And guess what? We're also
price matching so you won't find a better deal anywhere else!";

    $pagecontent["snowie"]["service"] = "$sitelink/assets/snowie/gallery/1-min.jpg";
    $pagecontent["snowie"]["contact"] = "$sitelink/assets/snowie/gallery/2-min.jpg";
    


    $pagecontent["snowie"]["ifleaf"] = "<img src='$sitelink/assets/snowie/snowflake.png' alt='' class='leaf-above snowflake'>";
    $pagecontent["snowie"]["ifleafi"] = "ı";

    $pagecontent["snowie"]["textlogo"] = "snowie-w-icon";

    
    $experiences["snowie"] = [
        "Essential Removal",
        "Premium Removal",
        "Essential Removal"
    ];

    $pagecontent["snowie"]["prices"] = "
            <div class=\"prices-grid\">
                <div class=\"wrap-price center\">
                    <p class=\"s4 black\">Starting From</p>
                    <p class=\"s1 accent bold pricing\">$225</p>
                    <p class=\"s4 black after-price\">Per Month</p>
                    <p class=\"s3 black line-3\">Essential Removal</p>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Snow Removal:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Driveway</li>
                                    <li class=\"s4 black noselect\">Walkway</li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center black pricing-description line-3\">
                        Cleared In 12-Hours After Snowfall!<br>
                    </p>
                    <hr />
                    <p class=\"s4 center white pricing-description line-3\">
                        <font class='black'>
                        Get ready to say goodbye to snow hassles with our must-have Essential Removal service. Don't let snow
                        slow you down - choose Snowie and make every morning a snowless success!</font>
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
                <div class=\"wrap-price center featured\">
                    <p class=\"s4 white\">Starting From</p>
                    <p class=\"s1 white bold pricing\">$300</p>
                    <p class=\"s4 white after-price\">Per Month</p>
                    <p class=\"s3 white line-3\">Premium Removal</p>

                    <div class=\"wrap-limited s3 black bold\">LIMITED</div>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect white\">Snow Removal:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Driveway</li>
                                    <li class=\"s4 black noselect\">Walkway</li>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center white pricing-description line-3\">
                        Cleared In 12-Hours After Snowfall!<br>
                        +<br>
                        Cleared By 7AM Overnight Snowfall!<br>
                    </p>
                    <hr />
                    <p class=\"s4 center white pricing-description line-3\">
                        The ultimate game-changer for your winter mornings! With Premium Removal subscription at Snowie, we
                        ensure your property is snow-free before your busy day even begins. Say goodbye to those stressful,
                        snow-packed mornings and hello to a smooth, hassle-free start. Let Snowie handle the snow early, so you
                        can enjoy more time for what matters most.
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
                <div class=\"wrap-price center\">
                    <p class=\"s1 accent bold pricing\">Per Request</p>
                    <p class=\"s3 black line-3\">Custom Services</p>

                    <hr />
                    <div class=\"price-offer-wrap\">
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Car Clearing:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Small Vehicles (Sedan, Hatchback, Etc…)</li>
                                    <li class=\"s4 black noselect\">Medium Sized Vehicles (5 Seater SUV, Crossover, Etc…)</li>
                                    <li class=\"s4 black noselect\">Large Vehicles (Mini Van, 7 Seater SUV, Etc…)</li>
                                </ul>
                            </div>
                        </details>
                        <details>
                            <summary>
                                <h4 class=\"noselect\">Ice Melter:</h4>
                                <div class=\"toggle-plus s3 bold noselect\"></div>
                            </summary>
                            <div class=\"expanded\">
                                <ul class=\"left\">
                                    <li class=\"s4 black noselect\">Regular</li>
                                    <li class=\"s4 black noselect\">Premium</li>
                                    <ul class='extra-exp'>
                                        <li class=\"s4 black noselect\">Fast & Long Acting</li>
                                        <li class=\"s4 black noselect\">30% Less Corrosive</li>
                                        <li class=\"s4 black noselect\">Extended Protection Against Re-Freeze</li>
                                        <li class=\"s4 black noselect\">Melts 25% More Ice</li>
                                        <li class=\"s4 black noselect\">Effective Down To -30C</li>
                                        <li class=\"s4 black noselect\">Does Not Stain</li>
                                        <li class=\"s4 black noselect\">Safe For Pets Paws</li>
                                        <li class=\"s4 black noselect\">Safe For Concrete</li>
                                        <li class=\"s4 black noselect\">Safe For Asphalt</li>
                                        <li class=\"s4 black noselect\">Safe For Pavers</li>
                                        <li class=\"s4 black noselect\">Safe For Stones</li>
                                        <li class=\"s4 black noselect\">Safe For Vegetation</li>
                                    </ul>
                                </ul>
                            </div>
                        </details>
                    </div>
                    <hr />
                    <p class=\"s4 center black pricing-description line-3\">
                        Only For Our Clients, Need Something else? Got a special request?
                        Consider it done! Don't see it on our list? No sweat - just give us a shout, and chances are,
                        We'll make it happen!
                    </p>
                    <hr />
                    <button class=\"s3 white center full-button to-contact black-button\">Let's Schedule</button>
                </div>
            </div>
    ";

    $pagecontent["snowie"]["randomized"] = rand(1, 3);
    $pagecontent["snowie"]["randomized-2"] = rand(1, 3);
    $pagecontent["snowie"]["seasonal"] = "November 15th - April 15th";

    
    $greeniearr = json_encode($pagecontent["greenie"]);


    $snowiearr = json_encode($pagecontent["snowie"]);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?> - Your go-to for all things garden and lawn</title>
    <meta property="og:title" content="<?=$title?> - Your go-to for all things garden and lawn" />
    <meta name="twitter:title" content="<?=$title?> - Your go-to for all things garden and lawn">
    <meta property="og:description" content="Your ultimate all-year outdoor solution! Experience our personalized, all-inclusive service that maintains and elevates your property to new heights throughout the year" />
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
    <meta name="theme-color" content="#00704A">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$sitelink?>/style/main.css?v=2.008">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your ultimate all-year outdoor solution! Experience our personalized, all-inclusive service that maintains and elevates your property to new heights throughout the year" />
    <meta name="keywords" content="greenie, snowie, landscaping" />
    <meta name="target" content="all" />
    <meta name="audience" content="all" />
    <meta name="coverage" content="Worldwide" />
    <meta name="distribution" content="Global">
    <meta name="og:type" content="website" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>

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
    <div class="loading for-<?=$page?>">
        <div class="square-img">
            <img src="<?=$sitelink?>/assets/logo/logo-left.png?v=1.002" alt="" class="square-in l-l">
            <img src="<?=$sitelink?>/assets/logo/logo-right.png?v=1.002" alt="" class="square-in l-r">
        </div>
        <h4 class="black line-3">Loading...</h4>
    </div>
    <menu>
        <div class="left-side">
            <a class="logo-left change-season"><img src="<?=$sitelink?>/assets/logo/icon.png?v=1.001" alt="" class="logo-menu"></a>
        </div>
        <div class="right-side">
            <a href="#welcome" class="menu-link white s4">About Us</a>
            <a href="#experience" class="menu-link white s4">Our Experience</a>
            <a href="#pricing" class="menu-link white s4">Pricing</a>
            <a href="#contact" class="menu-link white s4">Get In Touch</a>
                
            <div class="swap-season">
                <div class="season-option">
                    <div class="toggle-option greenie-toggle change-season">
                        <div class="toggle-ball"></div>
                    </div>
                </div>
            </div>
        </div>
    </menu>
    <main>
        <header>
            <img src="<?=$sitelink?>/assets/<?=$page?>/gallery/1-min.jpg" alt="" class="bg header-anim">
            <div class="header-center">
                <h1 class="white center s0 line-3 bold">Green Or Snow<br>We'll Be There!</h1>

                <div class="wrap-actions">
                    <?=$pagecontent["$page"]["header"]?>
                </div>
            </div>
        </header>
        <section id="welcome">
            <div class="split-welcome">
                <div class="split-in">
                    <div class="sticky">
                        <div class="split-title">
                            <p class="s0 black line-3 bold">Welcome To <font class="accent alter-title"><?=$title?></font></p>
                        </div>
                        <p class="s4 welcome-text black line-4"><?=$pagecontent["$page"]["introduction"]?></p>
                    </div>
                </div>
                <div class="split-in">
                    <div class="square-img">
                        <img src="<?=$sitelink?>/assets/<?=$page?>/gallery/<?=$pagecontent["$page"]["randomized"]?>-min.jpg" alt="" class="square-in">
                    </div>
                </div>
            </div>
        </section>
        <section id="newsletter">
            <div class="wrap-newsletter">
                <p class="s3 bold white right">Join Our Newsletter</p>
                <form id="newsletter-form">
                    <div class="wrap-input">
                        <input type="mail" name="email" placeholder=" " required>
                        <label for="email" class="black s4">E-Mail</label>

                        <div class="in-input-submit"><img src="https://xenons.net/iconsets/iconly/Bulk/Send.svg" /></div>
                    </div>
                </form>
            </div>
        </section>
        <section id="experience">
            <div class="wrap-title center">
                <div class="alter-experience center-title center inline">
                    <h1 class="s0 black bold">Our <font class="accent">Exper<font class='wrap-lf inline'><?=$pagecontent["$page"]["ifleaf"]?><?=$pagecontent["$page"]["ifleafi"]?></font>ences</font></h1>
                </div>
            </div>

            <div class="experiences-grid">

            </div>
        </section>
        <section id="custom-service" class="has-bg">
            <img src="<?=$pagecontent["$page"]["service"]?>" alt="" class="section-bg">
            <div class="special-grid">
                <div class="wrap-in">
                    <h1 class="white line-3 bold customize-title"><?=$pagecontent["$page"]["customize-title"]?></h1>
                </div>
                <div class="wrap-in">
                    <p class="s4 white line-4 special-explain"><?=$pagecontent["$page"]["customize"]?></p>
                </div>
            </div>
        </section>
        <section id="pricing">
            <div class="wrap-title center">
                <div class="center-title center inline">
                    <h1 class="s0 black bold">Our Prices</h1>
                </div>
            </div>
            <p class="center black s4 line-3">We provide our service in Midtown Toronto! This includes Eglinton, Forest Hill, Lawrence Park and more!</p>
            
            
            <div class="swap-season sinpr">
                <div class="season-option greenie-season right">
                    <div class="change-greenie"><img src="<?=$sitelink?>/assets/logo/logo-left.png?v=1.002" alt="" class="season inline"></div>
                </div>
                <div class="season-option">
                    <div class="toggle-option greenie-toggle change-season">
                        <div class="toggle-ball"></div>
                    </div>
                </div>
                <div class="season-option snowie-season left">
                    <div class="change-snowie"><img src="<?=$sitelink?>/assets/logo/logo-right.png?v=1.002" alt="" class="season inline"></div>
                </div>
            </div>
            <div class="wrap-js-prices"><?=$pagecontent["$page"]["prices"]?></div>
            <br><br>
            <h5 class="black center line-4">Seasonal Subscription Starting <u id="seasonal-se"><?=$pagecontent["$page"]["seasonal"]?></u></h5>
            <div class="licensing"><h5 class="black center line-4">Licensed By</h5><img src="<?=$sitelink?>/assets/icons/BADGE2.png?v=1" alt="" class="license"></div>
        </section>
        <section id="contact">
            <div class="contact-grid">
                <div class="wrap-in wrap-left-contact">
                    <div class="wrap-contact-cover">
                        <img src="<?=$pagecontent["$page"]["contact"]?>" alt="" class="contact-cover">
                    </div>
                    <div class="over-contact-cover">
                        <p class="white bold s1 line-3">Get In Touch</p>
                        <p class="white line-3 s4">Fill out the form and we will get back to you quickly!</p>

                        <div class="wrap-other-ways">
                            <p class="white line-3 s4">Alternatively, you can reach us on:</p>
                            <div class="wrap-socials">
                                <a href="tel:437-422-4489" class="social-in">
                                    <img src="https://xenons.net/iconsets/hicon/phone-ring.svg" alt="" class="social-icon">
                                </a>
                                <a href="mailto:contact@greeniesnowie.com" class="social-in">
                                    <img src="https://xenons.net/iconsets/hicon/email.svg" alt="" class="social-icon">
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=61553281314634" target="_blank" class="social-in">
                                    <img src="https://xenons.net/iconsets/hicon/facebook.svg" alt="" class="social-icon">
                                </a>
                                <a href="https://www.instagram.com/greeniesnowie/" target="_blank" class="social-in">
                                    <img src="https://xenons.net/iconsets/hicon/instagram.svg" alt="" class="social-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-in wrap-right-contact">
                    <iframe name="form-post" src=""></iframe>
                    <form method="POST" action="<?=$sitelink?>/actions/send-mail.php" class="sticky" id="contact-form">
                        <div class="grid-input">
                            <div class="wrap-input">
                                <input type="text" name="first-name" placeholder=" " required >
                                <label for="first-name" class="black s4">First Name</label>
                            </div>
                            <div class="wrap-input">
                                <input type="text" name="last-name" placeholder=" " required >
                                <label for="last-name" class="black s4">Last Name</label>
                            </div>
                        </div>
                        <div class="wrap-input">
                            <input type="text" name="phone-number"  placeholder=" " required >
                            <label for="phone-number" class="black s4">Phone Number</label>
                        </div>
                        <div class="wrap-input">
                            <input type="mail" name="email" placeholder=" " required >
                            <label for="email" class="black s4">E-Mail</label>
                        </div>
                        <div class="wrap-input">
                            <textarea name="request" placeholder=" " rows="5" required></textarea>
                            <label for="phone-number" class="black s4">How Can We Help?</label>
                        </div>
                        <button class="s3 white center full-button">Send</button>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <img src="<?=$sitelink?>/assets/logo/<?=$pagecontent["$page"]["textlogo"]?>.png?v=1" class="footer-logo" alt="">
            <div class="badges-flex" style="display:none;">
                <img src="<?=$sitelink?>/assets/icons/BADGE1.png?v=1" alt="" class="badge-in">
                <img src="<?=$sitelink?>/assets/icons/BADGE3.png?v=1" alt="" class="badge-in">
            </div>
            <a href="<?=$sitelink?>/terms-of-services.php" class="white s4">Terms Of Services</a>
            <h4 class="gray line-4 center">Copyright © <?=date("Y")?> GreenieSnowie. All Rights Reserved.</h4>
        </footer>

        <div class="response-message s3"></div>

        <div class="gallery-full">
            <img src="https://xenons.net/iconsets/hicon/x-square.svg" alt="" class="close-gallery">
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="style/ScrollTrigger.min.js"></script>
    <script>
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {$('menu').addClass('active-menu');}
			else {$('menu').removeClass('active-menu');}
		}

        var page = "<?php echo $page?>";
        var title = "<?php echo $page?>";


        //Carousel
        function prepareExperiences() {
            console.log(page);
            if(page == "greenie") {var experiences = <?php echo json_encode($experiences['greenie']);?>}
            if(page == "snowie") {var experiences = <?php echo json_encode($experiences['snowie']);?>}
            $(".experiences-grid").html("");
            experiences.forEach(function(exp, index) {
                ni = index + 1;
                if(index == 0) {exclass = "experience-1";}
                else {exclass = "";}
                $(".experiences-grid").append("<div class='experience-in inline' id='"+exclass+"'><img src='<?=$sitelink?>/assets/"+page+"/gallery/"+ni+"-min.jpg?v=1' alt='Experience image of "+exp+" on greeniesnowie.com' class='experience-img'><p class='s3 white over-experience center'>"+exp+"</p></div>");
            });
        }


        $(document).on("click", ".experience-in", function(){
            newsr = $(this).find('img').attr('src').replace("-min", "");
            $("menu").hide();
            $(".gallery-full").append("<img class='gallery-in' src='"+newsr+"' alt='Experience image of greeniesnowie.com'>")
            $(".gallery-full").fadeIn(500);
        });
        $(document).on("click", ".gallery-full", function(){
            if($(".gallery-in:hover").length == 0) {
                $(".gallery-full").fadeOut(500);
                setTimeout(() => {
                    $(".gallery-in").remove();
                }, 500);
                $("menu").show();
            }
        });
        $(document).on("click", ".close-gallery", function(){
            $(".gallery-full").fadeOut(500);
            setTimeout(() => {
                $(".gallery-in").remove();
            }, 500);
            $("menu").show();
        });

        //Scrolling
        $(document).on("click", ".to-contact", function(){
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#contact").offset().top
            }, 800);
        });


        //Form handling
        function handleForm(response) {
            switch(response) {
                case "0":
                    formEvent = "success";
                    formMessage = "Thank you for your message, we will get back to you soon.";
                    break;
                case "1":
                    formEvent = "error";
                    formMessage = "Please make sure to fill out all fields before submitting.";
                    break;
                case "2":
                    formEvent = "error";
                    formMessage = "Your name can't include special characters.";
                    break;
                case "3":
                    formEvent = "error";
                    formMessage = "Your name can't include special characters.";
                    break;
                case "4":
                    formEvent = "error";
                    formMessage = "Make sure to use a valid E-Mail address.";
                    break;
                case "5":
                    formEvent = "error";
                    formMessage = "Make sure to use a valid phone number.";
                    break;
                case "6":
                    formEvent = "error";
                    formMessage = "Please wait a bit before re-submitting the form.";
                    break;
                case "7":
                    formEvent = "success";
                    formMessage = "Thank you for joining our Newsletter!";
                    break;
                case "8":
                    formEvent = "error";
                    formMessage = "Please make sure to use a valid E-Mail.";
                    break;
                case "9":
                    formEvent = "error";
                    formMessage = "SQL.";
                    break;
                case "10":
                    formEvent = "error";
                    formMessage = "You are already part of our Newsletter.";
                    break;
            }
            $(".response-message").addClass("show-message message-"+formEvent).text(formMessage);
            setTimeout(() => {
                $(".response-message").removeClass("show-message message-"+formEvent).text("");
            }, 10000);
        }

        if("<?php echo $uns;?>" == "1") {
            $(".response-message").addClass("show-message message-success").text("Successfully unsubscribed from our Newsletter.");
            setTimeout(() => {
                $(".response-message").removeClass("show-message message-success").text("");
            }, 10000);
        }

        var lastSubmitTime = 0;
        $('#contact-form').submit(function(event) {
            event.preventDefault();
            var currentTime = new Date().getTime();
            if (currentTime - lastSubmitTime < 30000) {handleForm(6)}
            else {
                lastSubmitTime = currentTime; 
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'https://<?php echo $cdomain;?>/actions/send-mail.php',
                    data: formData,
                    success: function(response) {
                        handleForm(response)
                    }
                });
            }
        });
        $('#newsletter-form').submit(function(event) {
            event.preventDefault();
            var currentTime = new Date().getTime();
            if (currentTime - lastSubmitTime < 30000) {handleForm(6)}
            else {
                lastSubmitTime = currentTime; 
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'https://<?php echo $cdomain;?>/actions/save-newsletter.php',
                    data: formData,
                    success: function(response) {
                        handleForm(response)
                    }
                });
            }
        });
        $(document).on("click", ".in-input-submit", function(){
            $("#newsletter-form").submit();
        });



        //STR
        gsap.to(document.querySelector("#custom-service .section-bg"), {
            ease: "none",
            yPercent: -15,
            scrollTrigger: {
                trigger: document.querySelector("#custom-service"),
                scrub: 1,
                markers: false,
                start: 'top-=70%',
                end: 'top+=60%',
            },
        });
        gsap.to(document.querySelector("#newsletter .section-bg"), {
            ease: "none",
            yPercent: -15,
            scrollTrigger: {
                trigger: document.querySelector("#newsletter"),
                scrub: 1,
                markers: false,
                start: 'top-=70%',
                end: 'top+=60%',
            },
        });


        function applyStyles(styleContent) {
            
            let styleElement = document.getElementById('dynamic-styles');

            if (!styleElement) {
                styleElement = document.createElement('style');
                styleElement.id = 'dynamic-styles';
                document.head.appendChild(styleElement);
                
            }
            if(page == "greenie") {styleElement.innerHTML = "<?php echo $accent['greenie'];?>";}
            if(page == "snowie") {styleElement.innerHTML = "<?php echo $accent['snowie'];?>";}
        }
        applyStyles();
        
        let headerChange;
        function changeSeason(season = "greenie") {
            if(season == "greenie") {getarr = <?php echo $greeniearr?>;}
            if(season == "snowie") {getarr = <?php echo $snowiearr?>;}
            page = season;
            title = page.charAt(0).toUpperCase() + page.slice(1);

            $(".bg").removeClass("header-anim");
            clearInterval(headerChange);
            activeHeader = 0;
            timertime = 5000;
            headerChange = setInterval(() => {
                if(timertime == 5000) {
                    timertime = 500;
                    activeHeader++;
                    if (activeHeader > 3) {activeHeader = 1;}
                    if(!$(".bg").hasClass("header-anim")) {$(".bg").addClass("header-anim");}
                    $("header .bg").attr("src", "<?=$sitelink?>/assets/"+page+"/gallery/"+activeHeader+"-min.jpg");
                }
                else {timertime += 500;}
            }, 500);

            history.pushState(null, null, "/"+page+"/");
            document.title = title+" - Your go-to for all things garden and lawn";

            prepareExperiences();
            applyStyles();

            //Header
            $("header .wrap-actions").html(getarr["header"]);

            //Welcome
            $(".welcome-text").html(getarr["introduction"]);
            $("#welcome .square-in").attr("src", getarr["introduction-image"]);
            $("#welcome .square-in").attr("src", "<?=$sitelink?>/assets/"+page+"/gallery/"+getarr['randomized']+"-min.jpg");
            $(".alter-title").text(title);

            //Experience
            $(".alter-experience").html("<h1 class='s0 black bold'>Our <font class='accent'>Exper<font class='wrap-lf inline'>"+getarr['ifleaf']+""+getarr['ifleafi']+"</font>ences</font></h1>");

            //Customize
            $("#custom-service .section-bg").attr("src", getarr["service"]);
            $(".customize-title").html(getarr["customize-title"]);
            $("#custom-service .special-explain").html(getarr["customize"]);

            //Prices
            $(".toggle-option").removeClass("greenie-toggle snowie-toggle").addClass(page+"-toggle");
            $(".wrap-js-prices").html(getarr["prices"]);
            $("#seasonal-se").text(getarr["seasonal"]);

            //Contact
            $(".contact-cover").attr("src", "<?=$sitelink?>/assets/"+page+"/gallery/"+getarr['randomized-2']+"-min.jpg");
            //Footer
            $(".footer-logo").attr("src", "<?=$sitelink?>/assets/logo/"+getarr["textlogo"]+".png?v=1.003");
        }

        $(document).on("click", ".change-season", function() {
            if(page == "greenie") {changeSeason("snowie")}
            else {changeSeason("greenie")}
        });
        $(document).on("click", ".change-snowie", function() {
            changeSeason("snowie")
        });
        $(document).on("click", ".change-greenie", function() {
            changeSeason("greenie")
        });
        changeSeason(page);

        $(document).ready(function() {
            setTimeout(() => {
                $(".loading").fadeOut(300);
            }, 500);
        });
    </script>
</body>
</html>
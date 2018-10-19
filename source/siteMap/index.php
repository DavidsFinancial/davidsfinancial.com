<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Site Map | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .col1 {
            width: 100% !important; padding-left: 0 !important;
        }

        .content {
            float: left; width: 100%; text-indent: 0;
            margin: 0 !important; padding: 0 0 5px 0 !important;
        }

        .content a {
            color: #000;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">SITE MAP</div>
            <div class="col1">
                <div class="content"><a href="<?php echo $url_prefix; ?>locations" target="_self">Locations & Hours</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>contactUs" target="_self">Contact Us</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>employment" target="_self">Employment Opportunities</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>aboutUs" target="_self">About Us</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>checkCashing" target="_self">Check Cashing</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>bonusBucks" target="_self">Bonus Bucks</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>directDeposits" target="_self">Direct Deposits</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>billPay" target="_self">Bill Pay</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>products" target="_self">Products</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>services" target="_self">Services</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>moneyTransfers" target="_self">Money Transfers</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>accessibility" target="_self">Accessibility</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>privacy" target="_self">Privacy</a></div>
                <div class="content"><a href="<?php echo $url_prefix; ?>legal" target="_self">Legal</a></div>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
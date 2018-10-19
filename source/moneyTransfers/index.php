<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Money Transfers | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .wuImage {
            display: table; width: 100px;
            float: left; clear: none;
            margin: -30px 10px 10px 0;
        }

        .callOut {
            display: table;
            float: left; clear: none;
            font-family: "raleway-bold", Arial, Helvetica, sans-serif;
            font-size: 190%;
            color: #000;
            margin: 5px 0 0 10px;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">MONEY TRANSFERS</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>MONEY TRANSFER - MONEY ORDER PAYMENTS - PREPAID</div>
                <div class="contentTitle">
                    <img class="wuImage" src="<?php echo $url_prefix; ?>_images/westernUnion_circleLogo.png" alt="Western Union Logo" title="Western Union Logo">
                    <div class="callOut">Business Services</div>
                </div>
                <div class="content">
                    <div class="bold">Need to send some cash to someone you love?
                        <p>Want to send a special message and a gift to a graduating senior?
                        <p>Need to get some quick cash for an emergency from a friend or family member?</div>
                    <div>Davids Check Cashing is proud to be an Authorized Western Union Agent allowing you to send or receive money fast, to or from anywhere in the world.</div>
                </div>
                <div class="contentTitle">You can find the following services at any of our stores:</div>
                <div class="table">
                    <div class="col_single">
                        <div class="item">Send Cash</div>
                        <div class="item">Receive Cash (No Fee to Receive)</div>
                        <div class="item">Money Orders (up to $1,000)</div>
                        <div class="item">Quick Collect / Swift Pay bill payment service for same day payments of:
                            <div class="table" style="margin: 0;line-height: 100%; font-size: 90%;">
                                <div class="col_single">
                                    <div class="item">Car Payments</div>
                                    <div class="item">Mortgage</div>
                                    <div class="item">Utility Bills</div>
                                    <div class="item">Credit Cards</div>
                                    <div class="item">Child Support</div>
                                    <div class="item">Federal Inmates</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <?php require('../_layouts/storeFinder.php') ?>
                <?php require('../_layouts/ebtSchedule.php') ?>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
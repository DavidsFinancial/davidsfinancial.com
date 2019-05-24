<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Business Check Cashing - Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .btnPDFLink {
            display: table;
            float: left; clear: both;
            width: auto;
            margin: 10px auto; padding: 10px 20px; box-sizing: border-box;
            border: 1px solid #942d2d;
            cursor: pointer;
            background-color: #a53232;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #FFF;
        }

        .btnPDFLink::after {
            font-family: "menu", Arial, Helvetica, sans-serif;
            font-size: 140%;
            font-weight: normal !important;
            content: 'y';
            margin-left: 10px;
        }

        .btnPDFLink:hover {
            background-color: #000;
            color: #FFFF00;
        }

        .friendImage {
            display: inline-block;
            float: left;
            margin: 0 30px 30px 0;
        }

        @media screen and (max-width: 1024px){
            .btnPDFLink { padding: 10px; font-size: 90%; }
            .btnPDFLink::after { font-size: 90%; }
        }

        @media screen and (max-width: 570px){
            .btnPDFLink { width: 100%; }
        }

        .subheader {
            font-family: "raleway-bold", Arial, Helvetica, sans-serif !important;
            color: #fd821c !important;; font-size: 250% !important;;
        }

    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title"><img src="<?php echo $url_prefix; ?>_images/businessCheckCashingLogo.png" alt="" style="width: 350px; margin: 0 35px;"/></div>
            <div class="col1">
                <div class="content">
                    <img style="width: 100%;" src="<?php echo $url_prefix; ?>_images/businessHeroImg.jpg" alt="Business Hero Image"/>
                </div>
                <div class="contentTitle subheader" style="">When Money Flows, Your Business Grows</div>
                <div class="content">
                    Various construction trades, auto dealerships, and many other companies just like yours
                    <strong>rely on same day access to funds from checks written to their business—no holds, no wait.</strong> Davids provides you instant access to your money and is a smart alternative or additional resource to a traditional business bank account. Plus rest assured knowing we are licensed by the New York State Superintendent of Financial Services, pursuant to article 9-A of the Banking Law.
                </div>
                <div class="content" style="width: 100%; height: 1px; background-color: #CCC; margin-top: 20px;">&nbsp;</div>
                <div class="sectionTitle">At Davids, the Benefits Outweigh the Fees</div>
                <div class="content">Once you’re a Davids customer, you’ll have access to a host of business services that will help your business grow.
                    <p>Here’s just a few...
                </div>
                <div class="contentTitle" style="margin-top: 20px;">DAVIDS APP</div>
                <div class="content">Why wait in line or for your check to be approved.  The Davids App offers convenience at your fingertips.  Snap a picture of your check.  Send it remotely.  Visit an express window at any one of our convenient locations to pick up your cash, and pay bills, buy money orders, or load funds to your business reloadable prepaid card.</div>
                <div class="content"><p>Want to learn more – Just ask for this information (no more than 5 POI): your name, company name, telephone #, email, best way to reach me (email or telephone)</div>
                <div class="contentTitle">DISCOUNTED PAYROLL SERVICES...</div>
                <div class="content">If you are a Davids customer with three or more employees, you will receive a 25% discount off of ADP‘s standard rates on payroll services through our Partner Program.</div>
                <div class="contentTitle">AUTO DEALERSHIP SERVICES THAT DRIVE CASHFLOW...</div>
                <div class="content">
                    Yes, pre-owned vehicle dealers rely on Davids to access cash from their customers’ checks and bank drafts that would otherwise take up to ten days to clear. Our warranty programs will keep your customers happy and coming back for their next vehicle. Plus, they allow dealers and staff to earn commission.
                </div>
                <div class="contentTitle">AND THERE’S SO MUCH MORE...</div>
                <div class="content">
                    These are just some of the exciting ways we can help your business and keep you as a happy customer. Davids is committed to developing services designed specifically for businesses just like yours.
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
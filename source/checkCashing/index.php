<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Check Cashing - Davids Financial</title>
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

    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">PERSONAL CHECK CASHING</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>CHECK CASHING</div>
                <div class="content">At Davids Check Cashing, we offer a variety of cash services and cash most types of checks, including:</div>
                <div class="table">
                    <div class="col_third">
                        <div class="item">Payroll Checks</div>
                        <div class="item">Government Benefits</div>
                    </div>
                    <div class="col_third">
                        <div class="item">Tax Refunds</div>
                        <div class="item">Insurance Drafts</div>
                    </div>
                    <div class="col_third">
                        <div class="item">Attorney's Checks</div>
                        <div class="item">Money Orders</div>
                    </div>
                </div>
                <div class="content">We at David's will make every possible effort to cash your check in a fast, courteous and efficient manner.
                    We will go the extra step to make sure you walk out with your cash, you work hard for your money we will work harder to cash your check.</div>
                <div class="contentTitle">What should you bring</div>
                <div class="content">The first time you come into one of our locations we may ask for a valid photo ID (Driver's License, State ID, Passport, Green Card Etc.). You may also be asked for your Social Security number.</div>
                <div class="contentTitle">Become a valued customer</div>
                <div class="content">The first time you conduct a transaction with us, you will be provided a Valued Customer ID. This ID will serve as your customer identification and it will be accepted at any of our retail locations.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>DAVIDS APP</div>
                <div class="content">Why wait in line or for your check to be approved.  The Davids App offers convenience at your fingertips. Snap a picture of your check. Send it remotely. Visit an express window at any one of our convenient locations to pick up your cash, pay bills, buy money orders, load/unload debit cards and stage Western Union Money Transfers.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>PERSONAL REFER-A-FRIEND PROGRAM TERMS & CONDITIONS</div>
                <div class="content">
                    <img class="friendImage" src="<?php echo $url_prefix; ?>_images/checkCashing_referAFriend.png" alt="Check image" title="Check Image">
                    Referred customer must be a new customer to Davids Check Cashing. Referred customer must cash a check at Davids Check Cashing.
                    <p>Once you referred a friend that meets the criteria described above, your checks will be cashed for free up to a $600 face amount. If face amount is higher than $600.00, we will give you a credit up to the equivalent of the fee for the face amount of $600.00 and you will be responsible to pay the fee for the difference above the$600.00 face amount.
                    <p><span data-type="bold">Free Check Cashing term is for a 30 day period. No purchased necessary to participate.</span>
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
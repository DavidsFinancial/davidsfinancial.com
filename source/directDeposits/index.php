<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Direct Deposits | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .image {
            display: inline-block; width: 100px;
            float: left;
            margin: -30px 10px 0 -40px;
        }

        .callOut {
            display: inline-block;
            float: left;
            font-family: "raleway-bold", Arial, Helvetica, sans-serif;
            font-size: 180%;
            color: #096e8f;
            margin: 10px 0 0 0;
        }

        @media screen and (max-width: 1400px){
            .contentTitle .image { margin-left: 0; }
        }

        @media screen and (max-width: 880px){
            .contentTitle { text-align: center !important; }
            .contentTitle .image { width: 50px; margin: 0 10px 0 0; }
        }

        @media screen and (max-width: 570px){
            .contentTitle .image { width: 90px; display: table; float: none; margin: 0 auto; }
            .contentTitle .callOut {width: 100%; float: left; clear: both;}
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">DIRECT DEPOSIT</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>NOW YOU CAN GET YOUR MONEY FASTER</div>
                <div class="subtitle" style="padding: 20px 0;">Payroll, government benefits or any other type of recurring payment may be set up for direct deposit.  We will help you enroll today.</div>
                <div class="contentTitle" style="margin-top: 60px;">
                    <img class="image" src="<?php echo $url_prefix; ?>_images/directDeposits_creditCard.png" alt="Credit Card Image" title="Credit Card Image">
                    <div class="callOut">The Convenience of Plastic</div>
                </div>
                <div class="table" style="margin-top: 20px;">
                    <div class="col_half">
                        <div class="item">Receive your money days sooner than in the mail</div>
                        <div class="item">Your money is automatically loaded to a Visa&reg; or MasterCard&reg; reloadable prepaid card</div>
                        <div class="item">Use it to make purchases anywhere Visa&reg; or MasterCard&reg; are accepted</div>
                    </div>
                    <div class="col_half">
                        <div class="item">Safer than carrying cash</div>
                        <div class="item">Get access to cash at thousands of ATMs</div>
                        <div class="item">Add cash to your card anytime</div>
                    </div>
                </div>
                <div class="contentTitle" style="margin-top: 60px;">
                    <img class="image" src="<?php echo $url_prefix; ?>_images/directDeposits_check.png" alt="Check image" title="Check Image">
                    <div class="callOut">The Simplicity of Paper</div>
                </div>
                <div class="table" style="margin-top: 0;">
                    <div class="col_half">
                        <div class="item">Pick up your check at this store – days sooner than in the mail</div>
                        <div class="item">Never worry about your check being lost or stolen</div>
                        <div class="item">Cash it with the same friendly teller you always visit</div>
                    </div>
                    <div class="col_half">
                        <div class="item">Walk out with cash in your hand as usual</div>
                        <div class="item">Payroll, government benefits or any other type of recurring payment can be set up for direct deposit</div>
                    </div>
                </div>
                <div class="contentTitle">The Choice is Yours – Stop in and Enroll Today!</div>
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
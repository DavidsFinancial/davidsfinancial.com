<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bonus Bucks | Davids Financial</title>
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

        .chart {
            display: table;
            float: left; clear: both; width: 100%;
        }

        .chart .header {
            display: table;
            width: 100%;
            background-color: #025d56;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            color: #FFF;
            text-align: center;
            vertical-align: middle;
            padding: 10px; box-sizing: border-box;
        }

        .chart .body {
            display: table;
            width: 100%;
            font-family: "raleway-regular", Arial, Helvetica, sans-serif;
            color: #000;
            text-align: center;
            vertical-align: middle;
            padding: 0; box-sizing: border-box;
        }

        .chart .body .row {
            display: table;
            float: left; clear: both; width: 100%;
            background-color: #e9f5e9;
            border-bottom: 1px dotted #025d56;
        }

        .chart .body .row .left {
            display: table-cell;
            width: 48%;
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            text-align: right;
            padding: 15px 10px 15px; box-sizing: border-box;
        }

        .chart .body .row .right {
            display: table-cell;
            width: 52%;
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            color: #0f3f64;
            text-align: left;
            padding: 15px 10px 15px; box-sizing: border-box;
        }

        .bonusBucks img {
            float: left; clear: none;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">BONUS BUCKS</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>THANK YOU...</div>
                <div class="content bonusBucks">
                    <div>... for being a loyal Davids customer. We really appreciate your business. That's why we developed BONUS BUCKS. We know that you work hard for your money,
                        so we designed this program to reward you for your loyalty in doing business with Davids.
                    <p>Earn points when you cash a check, pay a bill, buy a money order, get or load a prepaid debit card! In fact, you can earn points for most services offered at Davids Check Cashing. See the chart below for details. And when you've earned enough points, cash them in for instant cash rebates, paid on the spot - up to $100!</div>
                    <div class="bold">Click the button below for Terms and Conditions</div>
                    <div class="btnPDFLink" title="Bonus Bucks Terms & Conditions" onClick="window.open('<?php echo $url_prefix; ?>_assets/bonusBucksProgram.pdf');">BONUS BUCKS TERMS (PDF)</div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>JOIN TODAY! GET YOUR NUMBER CARD & KEY TAG</div>
                <div class="content">It's free and you can start earning points with your very first transaction.</div>
                <div class="content">
                    <img src="<?php echo $url_prefix; ?>_images/bonusBucksTags.jpg" title="Bonus Bucks Tag images" style="margin-top: 30px;" alt="Bonus Bucks Tag images">
                </div>
                <div class="contentTitle">Most check cashing businesses just take your money for the services they provide.</div>
                <div class="content">At Davids, we pay you back. That's why we developed BONUS BUCKS the exciting new rewards program from Davids Check Cashing that pays you cash back for being a loyal customer. Every time you perform a qualifying transaction, you earn points based on either the fee for that transaction or a fixed number of points for the transaction itself.</div>
                <div class="contentTitle">See the chart below for ways to earn points:</div>
                <div class="chart">
                    <div class="header">Free Category Points Earned</div>
                    <div class="body">
                        <div class="row">
                            <div class="left">Check Cashing</div>
                            <div class="right">20 points per $1 or Fee Paid</div>
                        </div>
                        <div class="row">
                            <div class="left">Money Transfers</div>
                            <div class="right">5 points per $1 or Fee Paid</div>
                        </div>
                        <div class="row">
                            <div class="left">Money Orders</div>
                            <div class="right">15 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">Utility Bill Payment</div>
                            <div class="right">10 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">EBT</div>
                            <div class="right">10 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">Transfer Fare</div>
                            <div class="right">10 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">Phone Cards</div>
                            <div class="right">10 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">POB</div>
                            <div class="right">10 points per transaction</div>
                        </div>
                        <div class="row">
                            <div class="left">Debit Card</div>
                            <div class="right">20 points per transaction</div>
                        </div>
                    </div>
                </div>
                <div class="contentTitle">For example, cash a check with a fee of $5 and earn 100 points.</div>
                <div class="content">Buy a money order of any amount and earn 15 points. The  more you do, the more you earn. When you reach certain point levels, you can redeem them for instant cash rebates, paid to you right on the spot!</div>
                <div class="chart" style="margin-top: 20px;">
                    <div class="header">How Many Points Do You Need?</div>
                    <div class="body">
                        <div class="row">
                            <div class="left">Points Earned</div>
                            <div class="right">Bonus Bucks</div>
                        </div>
                        <div class="row">
                            <div class="left">12,500</div>
                            <div class="right">$5</div>
                        </div>
                        <div class="row">
                            <div class="left">25,500</div>
                            <div class="right">$10</div>
                        </div>
                        <div class="row">
                            <div class="left">50,000</div>
                            <div class="right">$20</div>
                        </div>
                        <div class="row">
                            <div class="left">125,000</div>
                            <div class="right">$50</div>
                        </div>
                        <div class="row">
                            <div class="left">250,000</div>
                            <div class="right">$100</div>
                        </div>
                    </div>
                </div>
                <div class="contentTitle">You'll be surprised just how quickly your points will add up.</div>
                <div class="content">And look for special promotional opportunities where we will offer additional points for special promotions and you can earn even more.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>HOW DOES IT WORK?</div>
                <div class="contentTitle" style="margin-top: 0;">It's really very simple.</div>
                <div class="content">If you already have a Davids Check Cashing key tag, you are already enrolled in the program and may already have earned points on past transactions. Check the bottom of your receipt to see what you have already earned.</div>
                <div class="contentTitle">If you are not enrolled in the program</div>
                <div class="content">Simply complete a brief account set up in our computer system and you will be issued a special membership card and key tag.</div>
                <div class="contentTitle">Be sure to use your card or key tag every time</div>
                <div class="content">you perform a transaction at Davids, and you will get credit for that transaction in your account. Your transaction receipt will have your current point totals printed on it reflecting your points earned through the last transaction.</div>
                <div class="contentTitle">It's really that simple.</div>
                <div class="content">So what are you waiting for? Get your membership started today and begin earning points with your next transaction.</div>
                <div class="contentTitle">At Davids, We Turn Checks Into Cash ... and your business earns you more cash!!</div>
            </div>
            <div class="col2">
                <?php require('../_layouts/calculator.php') ?>
                <?php require('../_layouts/storeFinder.php') ?>
                <?php require('../_layouts/ebtSchedule.php') ?>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
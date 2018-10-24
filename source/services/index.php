<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Convenience Services | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .ezPass img {
            max-height: 60px; max-width: 200px; margin: 0 20px 20px 0;
        }

        .indent {
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif !important;
            font-size: 110%;
            width: 95%;
            margin: 0 0 20px 0; padding: 0 0 0 20px; box-sizing: border-box;
            text-indent: -20px;
        }

        .chart {
            display: table;
            float: left; clear: both; width: 100%;
        }

        .chart .header {
            display: table;
            width: 100%;
            background-color: #555;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            color: #FFF;
            text-align: left;
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
            background-color: #EEE;
            border-bottom: 1px dotted #AAA;
        }

        .chart .body .row .left {
            display: table-cell;
            width: 20%;
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            text-align: center;
            padding: 15px 10px 15px; box-sizing: border-box;
        }

        .chart .body .row .right {
            display: table-cell;
            width: 80%;
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            color: #0f3f64;
            text-align: left;
            padding: 15px 10px 15px; box-sizing: border-box;
        }

        .storeLocations {
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            color: #FFF;
            background-color: #00847c;
            padding: 8px 10px; box-sizing: border-box;
            border-radius: 10px;
            cursor: pointer;
        }

        .storeLocations::after {
            font-family: "menu", Arial, Helvetica, sans-serif;
            font-size: 100%;
            font-weight: normal !important;
            content: 't';
            margin-left: 10px;
        }

        .storeLocations:hover {
            background-color: #000;
            color: #FFFF00;
        }

        .lottery img {
            max-width: 100px; max-height: 50px; margin: 10px 20px 10px 0;
        }

        @media screen and (max-width: 570px){
            .chart .header { font-size: 11pt; text-align: center }
            .chart .body .row .left, .chart .body .row .right { font-size: 10pt; padding: 10px; width: 50% }
            .storeLocations { display: table; width: 100%; margin-top: 10px; }
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">CONVENIENCE SERVICES</div>
            <div class="col1">
                <div class="subtitle">Davids provides a variety of services to help you manage your busy life. Besides helping you manage your money, we can save you time with the convenience of one-stop shopping.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>ATMs</div>
                <div class="content">Through our ATMs, Davids offers you the ability of performing a variety of electronic transactions such as cash withdrawals, account transfers and balance inquiries.
                    <p>(<span class="bold">$2.25</span> charge will apply to all ATM transactions and there is a $500.00 maximum withdrawal per transaction.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>LOTTERY</div>
                <div class="content">Dozens of Instant Win Games</div>
                <div class="content lottery">
                    <img src="<?php echo $url_prefix; ?>_images/lottery1.png" alt="Mega Millions logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery2.png" alt="Sweet Millions logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery3.png" alt="Power Ball logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery4.png" alt="New York Lotto logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery5.png" alt="Take 5 logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery6.png" alt="Numbers logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery7.png" alt="Win4 logo">
                    <img src="<?php echo $url_prefix; ?>_images/lottery8.png" alt="Pick10 logo">
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>METRO CARDS</div>
                <div class="chart" style="margin-top: 20px;">
                    <div class="header">Choose the card that's right for you.</div>
                    <div class="body">
                        <div class="row">
                            <div class="left">$5.50</div>
                            <div class="right">2 Local Subway/Bus rides</div>
                        </div>
                        <div class="row">
                            <div class="left">$9.91</div>
                            <div class="right">4 Local Subway/Bus rides</div>
                        </div>
                        <div class="row">
                            <div class="left">$19.82</div>
                            <div class="right">8 Local Subway/Bus rides</div>
                        </div>
                        <div class="row">
                            <div class="left">$39.64</div>
                            <div class="right">16 Local Subway/Bus rides</div>
                        </div>
                        <div class="row">
                            <div class="left">$31.00</div>
                            <div class="right">7-Day Unlimited</div>
                        </div>
                        <div class="row">
                            <div class="left">$116.50</div>
                            <div class="right">30-Day Unlimited</div>
                        </div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>E-Z PASS&reg; ON-THE-GO</div>
                <div class="content ezPass">
                    <img src="<?php echo $url_prefix; ?>_images/ezPassLogo.png" alt="E-Z Pass Logo"/>
                </div>
                <div class="content">
                    E-Z Pass On-The-Go is the newest, easiest way to obtain an E-ZPass Tag.
                </div>
                <div class="contentTitle">It’s as E-Z as 1-2-3:</div>
                <div class="content indent">
                    1. Stop at any Davids Check Cashing location in Rockland county and purchase the prepackaged account kit.
                </div>
                <div class="content indent">
                    2. Mount the tag in the vehicle and start using it immediately.
                </div>
                <div class="content indent">
                    3. Visit the E-ZPass web site and register your tag within 48 hours of its first use to get credit for your full purchase price.
                </div>
                <div class="content">
                    Existing E-ZPass customers that have a New York State Thruway or MTA Bridges & Tunnels account can also pick up an additional tag at any Authorized Retail Locations.
                    <p>EZPass On-The-Go tags are only available at Rockland County Davids locations.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>SELL UNUSED GIFT CARDS</div>
                <div class="content">
                    <span class="bold">Need Some Extra cash?</span>
                    <p>Convert unused gift cards to cash at any Davids location.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>COINS FOR CASH</div>
                <div class="content">
                    You finally filled up your piggy bank and don't know what to do with so many coins? It's very simple: just bring your coins to a select Davids location and our automated, self-service coin counting machine will do all of the work for you. It is as easy as slipping the coins into the machine, printing a receipt and getting your cash right away at the teller window.
                    <p>This service is available only at select Davids locations and there is a 10% fee for this service.
                    <p>Click the button for available <span class="storeLocations" onClick="location.href='<?php echo $url_prefix; ?>locations'">Store Locations</span>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>FAX & COPY SERVICES</div>
                <div class="content">
                    <span class="bold">Do you need to send a fax or make a copy? No worries!</span>
                    <p>Fax and copy service is available at all Davids locations. Faxes are $2.00 for the first page, $1.00 for each additional page. Copies are only 25¢ per page.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>POSTAGE STAMPS</div>
                <div class="content">Forget about those long lines at the post office just to get a stamp. For your convenience, we offer postage stamps at all Davids stores.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>CURRENCY EXCHANGE</div>
                <div class="content">Exchange your currency in any of our locations.</div>
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
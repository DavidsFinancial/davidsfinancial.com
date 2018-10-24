<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php require('_layouts/javascripts.php') ?>
    <link rel="stylesheet" href="_css/MAIN.css">
    <style>
        #hero {
            height: 500px;
            background-image: url('_images/heroImage_1.jpg');
            background-position: center;
            background-repeat: no-repeat;
        }

        #hero .message {
            float: right;
            font-family: "raleway-regular", Arial, Helvetica, sans-serif;
            font-size: 280%;
            color: #FFF;
            line-height: 120%;
            text-align: center;
            width: 670px;
            margin: 100px 0 0 0;
        }

        #hero .message .btnClickHere {
            display: inline-block;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 15pt;
            background-color: #000;
            width: auto;
            margin: 30px auto 0; padding: 5px 40px; box-sizing: border-box;
            border-radius: 10px;
            cursor: pointer;
        }

        #hero .message .btnClickHere:hover {
            background-color: #00847c;
        }

        #services {
            display: table;
            width: 100%;
            float: left; clear: both;
            margin: 40px 0 80px;
            text-align: left;
        }

        #services .serviceItemRow {
            display: table;
            float; left;
            width: 100%;
        }

        #services .serviceItem {
            display: table;
            width: 31%;
            float: left !important;
            margin: 20px 2% 10px 0; padding: 10px; box-sizing: border-box;
            cursor: pointer;
            border: 1px solid #FFF;
        }

        #services .serviceItem:hover {
            background-color: #ecfffe;
            border: 1px solid #00847c;
        }

        #services .serviceItem .serviceCol1 {
            display: table-cell; width: 10%;
            vertical-align: top;
            text-align: center;
            padding-top: 5px; box-sizing: border-box;
        }

        #services .serviceItem .serviceCol2 {
            display: table-cell; width: 90%;
            vertical-align: top;
            text-align: left;
        }

        #services .serviceItem .serviceCol2 .rowTitle {
            display: table;
            width: 100%;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 110%;
            padding: 10px; box-sizing: border-box;
        }

        #services .serviceItem .serviceCol2 .rowContent {
            display: table;
            width: 100%;
            font-family: "raleway-regular", Arial, Helvetica, sans-serif;
            font-size: 100%;
            line-height: 150%;
            padding: 2px 10px 10px; box-sizing: border-box;
        }

        @media screen and (max-width: 1400px){
            #hero { width: 100%; height: 35.5vw; background-size: contain; background-position: top; }
            #hero .message { font-size: 3vw; width: 40vw; margin: 7vw 5vw 0 0; }
            #hero .message .btnClickHere { font-size: 1.5vw; }

            #services { width: 100%; margin: 0 0 50px; padding-left: 1%; box-sizing: border-box }
            #services .serviceItemRow { padding: 0 40px; box-sizing: border-box }
            #services .serviceItem { width: 32%; margin: 10px 1% 10px 0; padding: 0 10px 0 0; box-sizing: border-box; }
            #services .serviceItem .serviceCol1 {width: 5%; text-align: left;}
            #services .serviceItem .serviceCol1 img {width: 30px;}
            #services .serviceItem .serviceCol2 {width: 95%; text-align: left;}
            #services .serviceItem .serviceCol2 .rowTitle { font-size: 100%; padding: 10px 0 0 10px}
            #services .serviceItem .serviceCol2 .rowContent { font-size: 85%; line-height: 130%; padding: 10px 0 0 10px}
        }

        @media screen and (max-width: 768px){
            #services .serviceItem { width: 100%; margin: 10px 0 10px 0; padding: 0 10px 0 0; box-sizing: border-box; }
        }

        @media screen and (max-width: 570px){
            #divBODY .title { font-size: 6vw; margin: 30px 0 20px; }
            #services .serviceItem {text-align: center }
            #services .serviceItem .serviceCol1 {float: left; clear: both; width: 100%; text-align: center}
            #services .serviceItem .serviceCol2 {float: left; clear: both; width: 100%; text-align: center}
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('_layouts/header.php') ?>
    <div id="divBODY">
        <div id="hero">
            <div class="innerContainer">
                <div class="message">
                    <div title="Ad: Get Your Benefits, Payroll, Unemployment, or any recurring payment your way!">Get Your Benefits, Payroll, Unemployment, or any recurring payment your way!</div>
                    <div class="btnClickHere" title="Click here to know more about Direct Deposit" onClick="navigateTo('directDeposits')">CLICK HERE TO KNOW MORE</div>
                </div>
            </div>
        </div>
        <div id="services">
            <div class="innerContainer">
                <div class="title">OUR SERVICES</div>
                <div class="serviceItemRow">
                    <div class="serviceItem" onClick="navigateTo('checkCashing')">
                        <div class="serviceCol1"><img src="_images/services_checkCashing.png" alt="Check Cashing Service icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">CHECK CASHING</div>
                            <div class="rowContent">At Davids Check Cashing, we offer a variety of cash services and cash most types of checks.</div>
                        </div>
                    </div>
                    <div class="serviceItem" onClick="navigateTo('bonusBucks')">
                        <div class="serviceCol1"><img src="_images/services_bonusBucks.png" alt="Bonus Bucks icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">BONUS BUCKS</div>
                            <div class="rowContent">We know that you work hard for your money, so we designed this program to reward you for your loyalty in doing business with Davids.</div>
                        </div>
                    </div>
                    <div class="serviceItem" onClick="navigateTo('directDeposits')">
                        <div class="serviceCol1"><img src="_images/services_directDeposit.png" alt="Direct Deposit icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">DIRECT DEPOSIT</div>
                            <div class="rowContent">Now you can get your money faster and more safely. Receive your money days sooner than in the mail.</div>
                        </div>
                    </div>
                </div>
                <div class="serviceItemRow">
                    <div class="serviceItem" onClick="navigateTo('billPay')">
                        <div class="serviceCol1"><img src="_images/services_billPay.png" alt="Bill Pay icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">BILL PAYMENT</div>
                            <div class="rowContent">Payments are quicker, more convenient, and more secure. All accounts are credited within 1-3 business days.</div>
                        </div>
                    </div>
                    <div class="serviceItem" onClick="navigateTo('products')">
                        <div class="serviceCol1"><img src="_images/services_products.png" alt="Prepaid Products icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">PREPAID PRODUCTS</div>
                            <div class="rowContent">No Credit? No Problem! Davids offers a variety of Visa® and MasterCard® branded debit cards for paying bills.</div>
                        </div>
                    </div>
                    <div class="serviceItem" onClick="navigateTo('services')">
                        <div class="serviceCol1"><img src="_images/services_services.png" alt="Convenience Services icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">CONVENIENCE SERVICES</div>
                            <div class="rowContent">Davids provides a variety of services to help you manage your busy life.</div>
                        </div>
                    </div>
                </div>
                <div class="serviceItemRow">
                    <div class="serviceItem" onClick="navigateTo('moneyTransfers')">
                        <div class="serviceCol1"><img src="_images/services_moneyTransfers.png" alt="Money Transfers icon"></div>
                        <div class="serviceCol2">
                            <div class="rowTitle">MONEY TRANSFERS</div>
                            <div class="rowContent">Need to send some cash to someone you love? Davids Check Cashing is proud to be an Authorized Western Union Agent.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('_layouts/footer.php') ?>
</div>
</body>
</html>
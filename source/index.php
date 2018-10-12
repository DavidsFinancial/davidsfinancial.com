<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        }

        #services {
            display: table;
            width: 100%;
            float: left; clear: both;
            margin: 80px 0;
            text-align: left;
        }

        #services .serviceItemRow {
            display: table;
            float; left;
            width: 100%;
        }

        #services .serviceItem {
            display: table;
            width: 30%;
            float: left !important;
            margin: 30px 3% 10px 0;
        }

        #services .serviceItem .col1 {
            display: table-cell; width: 10%;
            vertical-align: top;
            text-align: center;
            padding-top: 5px; box-sizing: border-box;
        }

        #services .serviceItem .col2 {
            display: table-cell; width: 90%;
            vertical-align: top;
            text-align: left;
        }

        #services .serviceItem .col2 .rowTitle {
            display: table;
            width: 100%;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 110%;
            padding: 10px; box-sizing: border-box;
        }

        #services .serviceItem .col2 .rowContent {
            display: table;
            width: 100%;
            font-family: "raleway-regular", Arial, Helvetica, sans-serif;
            font-size: 100%;
            line-height: 150%;
            padding: 2px 10px 10px; box-sizing: border-box;
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
                    <div class="btnClickHere" title="Click here to know more about Direct Deposit">CLICK HERE TO KNOW MORE</div>
                </div>
            </div>
        </div>
        <div id="services">
            <div class="innerContainer">
                <div class="title">OUR SERVICES</div>
                <div class="serviceItemRow">
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_checkCashing.png" alt="Check Cashing Service icon"></div>
                        <div class="col2">
                            <div class="rowTitle">CHECK CASHING</div>
                            <div class="rowContent">At Davids Check Cashing, we offer a variety of cash services and cash most types of checks.</div>
                        </div>
                    </div>
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_bonusBucks.png" alt="Bonus Bucks icon"></div>
                        <div class="col2">
                            <div class="rowTitle">BONUS BUCKS</div>
                            <div class="rowContent">We know that you work hard for your money, so we designed this program to reward you for your loyalty in doing business with Davids.</div>
                        </div>
                    </div>
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_directDeposit.png" alt="Direct Deposit icon"></div>
                        <div class="col2">
                            <div class="rowTitle">DIRECT DEPOSIT</div>
                            <div class="rowContent">Now you can get your money faster and more safely. Receive your money days sooner than in the mail.</div>
                        </div>
                    </div>
                </div>
                <div class="serviceItemRow">
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_billPay.png" alt="Bill Pay icon"></div>
                        <div class="col2">
                            <div class="rowTitle">BILL PAYMENT</div>
                            <div class="rowContent">Payments are quicker, more convenient, and more secure. All accounts are credited within 1-3 business days.</div>
                        </div>
                    </div>
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_products.png" alt="Prepaid Products icon"></div>
                        <div class="col2">
                            <div class="rowTitle">PREPAID PRODUCTS</div>
                            <div class="rowContent">No Credit? No Problem! Davids offers a variety of Visa® and MasterCard® branded debit cards for paying bills.</div>
                        </div>
                    </div>
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_services.png" alt="Convenience Services icon"></div>
                        <div class="col2">
                            <div class="rowTitle">CONVENIENCE SERVICES</div>
                            <div class="rowContent">Davids provides a variety of services to help you manage your busy life.</div>
                        </div>
                    </div>
                </div>
                <div class="serviceItemRow">
                    <div class="serviceItem">
                        <div class="col1"><img src="_images/services_moneyTransfers.png" alt="Money Transfers icon"></div>
                        <div class="col2">
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
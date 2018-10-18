<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Products | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .prepaid img {
            display: inline-block;
            max-width: 100px; max-height: 80px;
            margin: 10px 20px 10px 0;
        }

        .wireless img {
            display: inline-block;
            max-width: 150px; max-height: 50px;
            margin: 10px 20px 10px 0;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">PREPAID PRODUCTS</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>PREPAID DEBIT CARDS</div>
                <div class="content">No Credit? No Problem!
                    Davids offers a variety of Visa® and MasterCard® branded debit cards that allow you to get the convenience of paying with plastic without the hassles of monthly bills.
                </div>
                <div class="content prepaid">
                    <img src="<?php echo $url_prefix; ?>_images/billers8.png" title="Visa logo" alt="Visa Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers9.png" title="MasterCard logo" alt="MasterCard Logo">
                </div>
                <div class="contentTitle">
                    We offer the following brands of prepaid debit cards:
                </div>
                <div class="table">
                    <div class="col_single">
                        <div class="item">Green Dot Reloadable Prepaid Visa&reg; Card</div>
                        <div class="item">NetSpend&reg; Visa&reg; Prepaid Debit Card</div>
                        <div class="item">NetSpend&reg; MasterCard&reg; Prepaid Debit Card</div>
                        <div class="item">excella&reg; Visa&reg; Prepaid Debit Card</div>
                    </div>
                </div>
                <div class="content">
                    Simply purchase the card from our wide variety of options, load cash onto the card and then use it anywhere in the U.S. Visa or MasterCard debit is accepted – retail stores, restaurants, ATMs, online, phone purchases, you can even pay bills.
                    <p>They are safer than carrying cash since <span class="bold">if your card is lost or stolen, the funds stored on the card can be replaced!</span>
                    <p>Some cards even offer savings account options to help you better manage your money.
                    <p>There are no credit checks to get a card, no interest and no debt since you can only spend what you load to the card.
                    <p>Stop in to any Davids Check Cashing location throughout New York and get yours today!
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>CARD RELOADS</div>
                <div class="content">If your balance is running low and you need to add money to your card we have a solution for you.</div>
                <div class="contentTile">We are an authorized reload center for the following cards:</div>
                <div class="table">
                    <div class="col_single">
                        <div class="item">Green Dot cards acquired from Davids <span class="bold" style="color: #a00000">($2 Convenience Reload Fee)</span></div>
                        <div class="item">NetSpend&reg; Visa&reg; Prepaid Debit Card <span class="bold" style="color: #a00000">($2 Convenience Reload Fee)</span></div>
                        <div class="item">NetSpend&reg; MasterCard&reg; Prepaid Debit Card <span class="bold" style="color: #a00000">($2 Convenience Reload Fee)</span></div>
                        <div class="item">excella&reg; Visa&reg; Prepaid Debit Card <span class="bold" style="color: #a00000">($3 Convenience Reload Fee)</span></div>
                    </div>
                </div>
                <div class="content" style="font-size: 85%">
                    And reload hundreds of prepaid debit cards on the Green Dot Network ($4.95 Reload Fee)
                    <p>With our direct systems your money will post right away quickly onto your card account.
                    <p>The Green Dot Reloadable Prepaid Visa Card is issued by Green Dot Bank pursuant to a license from Visa U.S.A. Inc. Green Dot Bank operates under the following registered trade names: GoBank, Green Dot Bank and Bonneville Bank. All of these trade names are used by, and refer to, a single FDIC insured bank, Green Dot Bank. Deposits under any of these trade names are deposits with Green Dot Bank and are aggregated for deposit insurance coverage.
                    <p>NetSpend Visa and MasterCard Prepaid Cards are issued by MetaBank™, member FDIC. NetSpend is an authorized Independent Sales Organization of MetaBank. Use of card subject to ID verification and funds availability. Transaction fees, terms, and conditions apply. See Cardholder Agreement for complete details.
                    <p>The excella Visa Prepaid Debit Card is issued by The Bancorp Bank pursuant to a license from Visa U.S.A. Inc. and can be used wherever Visa debit cards are accepted. The Bancorp Bank; Member FDIC.
                    <p>MasterCard is a registered trademark of MasterCard International Incorporated. All other trademarks and service marks are the property of their respective owners.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>PREPAID WIRELESS</div>
                <div class="content wireless">
                    <img src="<?php echo $url_prefix; ?>_images/billers3.png">
                    <img src="<?php echo $url_prefix; ?>_images/billers11.png">
                    <img src="<?php echo $url_prefix; ?>_images/billers12.png">
                    <img src="<?php echo $url_prefix; ?>_images/sprintLogo.png">
                    <img src="<?php echo $url_prefix; ?>_images/boostMobileLogo.png">
                    <img src="<?php echo $url_prefix; ?>_images/partners1.png">
                    <img src="<?php echo $url_prefix; ?>_images/metroPCSLogo.png">
                    <img src="<?php echo $url_prefix; ?>_images/tracfoneLogo.png">
                </div>
                <div class="content">We offer a variety of brands and amounts. Come in today and stay connected to friends and family.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>PREPAID LONG DISTANCE</div>
                <div class="content">Have friends and family in other parts of the U.S. or the world? Stay connected for less. Davids Check Cashing offers a variety of prepaid long distance cards for just pennies per minute. Call to Mexico, the Caribbean, Central America, Europe, Asia, anywhere in the world for less.</div>
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
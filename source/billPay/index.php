<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bill Payment | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        #billers {
            display: none;
            float: left; clear: both;
            width: 100%;
        }

        #billers .itemBiller {
            display: inline-block;
            float: left; clear: none;
            width: auto;
            font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
            font-size: 100%;
            margin: 10px 10px 10px 0; padding: 10px; box-sizing: border-box;
            border: 1px solid #AAA;
        }

        #searchInput {
            background-image: url('../_images/searchIcon.png');
            background-repeat: no-repeat;
            background-position: 10px 14px;
            background-color: transparent;
            border: 3px solid #AAA;
            margin: 20px 0 0 0; padding: 10px 10px 10px 40px; box-sizing: border-box;
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 120%;
            border-radius: 25px;
            width: 100%;
        }

        .examples img {
            max-width: 100px; max-height: 50px;
            margin: 0 20px 10px; box-sizing: border-box; overflow: hidden;
        }

        @media screen and (max-width: 570px){
            #billers .itemBiller { width: 100%; text-align: center; font-size: 11pt; margin: 5px 0; padding: 10px; }
        }
    </style>
    <script language="javascript">
        function searchBillers(search){
            if(search.length >= 3){
                $("#billers").css('display', 'table');
                $(".itemBiller").css('display', 'none');
                $(".itemBiller[data-value*='" + search.toLowerCase() + "']").css('display', 'inline-block');
            }else{
                $("#billers").css('display', 'none');
                $(".itemBiller").css('display', 'inline-block');
            }
        }

        $(document).ready(function() {
            $('#searchInput').val('');
        });
    </script>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <?php
    //Get Billers
    $result = $MYSQL_CONN->query("SELECT * FROM billers ORDER BY title ASC");

    $billers = "";
    if (!$result) {
        $billers = "<div class='item'>No Billers Found</div>";
    }else{
        while ($row = $result->fetch_assoc()) {
            $name = $row['title'];
            $nameTag = strtolower($row['title']);
            $nameTag = str_replace('.', '', $nameTag);
            $nameTag = str_replace('-', '',  $nameTag);
            $nameTag = str_replace('?', '',  $nameTag);
            $nameTag = str_replace('(', '',  $nameTag);
            $nameTag = str_replace(')', '',  $nameTag);
            $nameTag = str_replace('/', '',  $nameTag);
            $nameTag = str_replace('&', '',  $nameTag);
            $nameTag = str_replace("'", "",  $nameTag);
            $nameTag = str_replace(',', '',  $nameTag);

            //echo $nameTag ."<br>";
            $billers .= '<div class="itemBiller" data-value="' . $nameTag .'">' . $name . '</div>';
        }
    }

    mysqli_free_result($result);

    ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">BILL PAYMENT</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div>PAY YOUR BILLS AT DAVIDS</div>
                <div class="content examples">
                    <img src="<?php echo $url_prefix; ?>_images/billers10.png" title="Con Edison logo" alt="Con Edison Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers11.png" title="Verizon logo" alt="Verizon Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers12.png" title="T-Mobile logo" alt="T-Mobile Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers1.png" title="Best Buy logo" alt="Best Buy Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers2.png" title="Home Depot logo" alt="Home Depot Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers3.png" title="AT&T logo" alt="AT&T Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers4.png" title="Met Life logo" alt="Met Life Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers5.png" title="Allstate logo" alt="AllState Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers6.png" title="Geico logo" alt="Geico Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers7.png" title="Waste Management logo" alt="Waste Management Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers8.png" title="Visa logo" alt="Visa Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers9.png" title="MasterCard logo" alt="MasterCard Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers13.png" title="Toyota logo" alt="Toyota Logo">
                    <img src="<?php echo $url_prefix; ?>_images/billers14.png" title="Ford logo" alt="Ford Logo">
                </div>
                <div class="content">
                    Payments are quicker, more convenient, and more secure. All accounts are credited within 1-3 business days. You can pay your bills on the spot at any Davids teller window.
                    <p>Strict measures have been taken to ensure complete security during all transactions. Business is conducted
                        in-person at the window and you will walk away with an instance, payment confirmation receipt.
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>SEARCH BILLERS</div>
                <div class="content">Please start typing the biller you would like to pay. A list will populate once you type more than 2 characters and when a match is found.</div>
                <div class="content">
                    <input id="searchInput" type="text" onkeyup="searchBillers(this.value)" value="">
                </div>
                <div id="billers">
                    <div class="contentTitle">Available Billers</div>
                    <?php echo $billers ?>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>MONEY ORDERS</div>
                <div class="content">Of course, when you need a paper payment device like a check to pay a bill, there is always a money order. All Davids retail locations sell Western Union Money Orders for any amount up to $1,000. They provide a safe, easy and reliable way to make purchases and pay bills for a very competitive price.</div>
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
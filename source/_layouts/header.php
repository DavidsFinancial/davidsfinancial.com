<?php

//Check Env Variable
$URI_SEARCH = 'source';
if(getenv('PHP_ENV')){
    //Production
    $thisURI = $_SERVER["REQUEST_URI"];

    $directories = substr_count($thisURI, '/');
    $url_prefix = "./";

    if($directories == 2){
        $url_prefix = "./../";
    }

    $thisURI_current = str_replace("/", "", $thisURI);
}else{
    //Local
    $thisURI = $_SERVER["REQUEST_URI"];
    $thisURI_part = explode($URI_SEARCH, $thisURI);
    $directories = substr_count($thisURI_part[1], '/');
    $url_prefix = "./";

    if($directories == 2){
        $url_prefix = "./../";
    }

    $thisURI_current = str_replace("/", "", $thisURI_part[1]);
}

//Navigation Structure
$menuState['about'] = "";
$menuState['employment'] = "";
$menuState['contactUs'] = "";
$menuState['location'] = "";

$menuState['checkCashing'] = "";
$menuState['bonusBucks'] = "";
$menuState['directDeposits'] = "";
$menuState['billPay'] = "";
$menuState['products'] = "";
$menuState['services'] = "";
$menuState['moneyTransfers'] = "";
$menuState['wu'] = "";

if($thisURI_current != ""){
    $menuState[$thisURI_current] = "on";
}

echo $directories;
echo "<p>";
echo $thisURI_current;
echo "<p>";
echo $url_prefix;
echo "<p>";
echo $thisURI;

?>
<script language="javascript">
    function navigateTo(url){
        location.href= '<?php echo $url_prefix; ?>' + url;
    }
</script>
<div id="divHEADER">
    <div class="top">
        <div class="innerContainer">
            <div class="branding" title="Davids Financial Logo" onClick="location.href='<?php echo $url_prefix; ?>'">&nbsp;</div>
            <div class="topMenu">
                <div class="searchItem" style="width: auto;"><input class="search" type="text" value="" alt="Search text box"></div>
                <div class="item" data-icon="about" data-state="<?php echo $menuState['aboutUs'] ?>" title="Menu (About Us)" onClick="navigateTo('aboutUs')"></div>
                <div class="item" data-icon="employment" data-state="<?php echo $menuState['employment'] ?>" title="Menu (Employment Opportunities)" onClick="navigateTo('employment')"></div>
                <div class="item" data-icon="contact" data-state="<?php echo $menuState['contactUs'] ?>" title="Menu (Contact Us)" onClick="navigateTo('contactUs')"></div>
                <div class="item" data-icon="location" data-state="<?php echo $menuState['locations'] ?>" title="Menu (Find Locations)" onClick="navigateTo('locations')"></div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="innerContainer">
            <div class="item" title="Go to Check Checking"  data-state="<?php echo $menuState['checkCashing'] ?>" onClick="navigateTo('checkCashing')">CHECK CASHING</div>
            <div class="item" title="Go to Bonus Bucks" data-state="<?php echo $menuState['bonusBucks'] ?>" onClick="navigateTo('bonusBucks')">BONUS BUCKS</div>
            <div class="item" title="Go to Direct Deposit" data-state="<?php echo $menuState['directDeposits'] ?>" onClick="navigateTo('directDeposits')">DIRECT DEPOSIT</div>
            <div class="item" title="Go to Bill Pay" data-state="<?php echo $menuState['billPay'] ?>" onClick="navigateTo('billPay')">BILL PAY</div>
            <div class="item" title="Go to Products" data-state="<?php echo $menuState['products'] ?>" onClick="navigateTo('products')">PRODUCTS</div>
            <div class="item" title="Go to Services" data-state="<?php echo $menuState['services'] ?>" onClick="navigateTo('services')">SERVICES</div>
            <div class="item" title="Go to Money Transfers" data-state="<?php echo $menuState['moneyTransfers'] ?>" onClick="navigateTo('moneyTransfers')">MONEY TRANSFERS</div>
            <div class="wuLogo"><img src="<?php echo $url_prefix; ?>_images/navigation_westernUnionLogo.gif"></div>
        </div>
    </div>

</div>
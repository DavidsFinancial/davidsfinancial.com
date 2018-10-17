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

?>
<script type="application/javascript" src="<?php echo $url_prefix; ?>_js/numeral.min.js"></script>
<script type="application/javascript" src="<?php echo $url_prefix; ?>_js/jquery-3.2.1.min.js"></script>
<script type="application/javascript" src="<?php echo $url_prefix; ?>_js/jquery-1.10.4.ui.js"></script>
<img src="<?php echo $url_prefix; ?>_images/loading_circleRing.svg" style="display: none;">
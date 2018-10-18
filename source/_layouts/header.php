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
            <div class="item" title="Go to Direct Deposit" data-state="<?php echo $menuState['directDeposits'] ?>" onClick="navigateTo('directDeposits')">DIRECT DEPOSITS</div>
            <div class="item" title="Go to Bill Pay" data-state="<?php echo $menuState['billPay'] ?>" onClick="navigateTo('billPay')">BILL PAY</div>
            <div class="item" title="Go to Products" data-state="<?php echo $menuState['products'] ?>" onClick="navigateTo('products')">PRODUCTS</div>
            <div class="item" title="Go to Services" data-state="<?php echo $menuState['services'] ?>" onClick="navigateTo('services')">SERVICES</div>
            <div class="item" title="Go to Money Transfers" data-state="<?php echo $menuState['moneyTransfers'] ?>" onClick="navigateTo('moneyTransfers')">MONEY TRANSFERS</div>
            <div class="wuLogo" title="Western Union Services" onClick="navigateTo('moneyTransfers')"><img src="<?php echo $url_prefix; ?>_images/navigation_westernUnionLogo.gif"></div>
        </div>
    </div>
</div>
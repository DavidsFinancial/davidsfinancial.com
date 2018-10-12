<script language="javascript">
    function navigateTo(url){
        location.href= './' + url;
    }
</script>
<div id="divHEADER">
    <div class="top">
        <div class="innerContainer">
            <div class="branding" title="Davids Financial Logo" onClick="location.href='./'">&nbsp;</div>
            <div class="topMenu">
                <div class="searchItem" style="width: auto;"><input class="search" type="text" value="" alt="Search text box"></div>
                <div class="item" data-icon="about" title="Menu (About Us)"></div>
                <div class="item" data-icon="employment" title="Menu (Employment Opportunities)"></div>
                <div class="item" data-icon="contact" title="Menu (Contact Us)"></div>
                <div class="item" data-icon="location" title="Menu (Find Locations)"></div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="innerContainer">
            <div class="item" title="Go to Check Checking" data-state="on" onClick="navigateTo('checkCashing')">CHECK CASHING</div>
            <div class="item" title="Go to Bonus Bucks" data-state="" onClick="navigateTo('bonusBucks')">BONUS BUCKS</div>
            <div class="item" title="Go to Direct Deposit" data-state="" onClick="navigateTo('directDeposits')">DIRECT DEPOSIT</div>
            <div class="item" title="Go to Bill Pay" data-state="" onClick="navigateTo('billPay')">BILL PAY</div>
            <div class="item" title="Go to Products" data-state="" onClick="navigateTo('products')">PRODUCTS</div>
            <div class="item" title="Go to Services" data-state="" onClick="navigateTo('services')">SERVICES</div>
            <div class="item" title="Go to Money Transfers" data-state="" onClick="navigateTo('moneyTransfers')">MONEY TRANSFERS</div>
            <div class="wuLogo"><img src="_images/navigation_westernUnionLogo.gif"></div>
        </div>
    </div>

</div>
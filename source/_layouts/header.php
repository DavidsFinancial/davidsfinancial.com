<?php
if($_SERVER['PHP_ENV'] != "production"){
    require($url_prefix.'../.scripts/mysqlCredentials.php');
}else{
    $MYSQL_HOST = $_SERVER['MYSQL_HOST'];
    $MYSQL_UNAME = $_SERVER['MYSQL_UNAME'];
    $MYSQL_PWD = $_SERVER['MYSQL_PWD'];
    $MYSQL_DB = $_SERVER['MYSQL_DB'];
}

// Create connection
if(!$MYSQL_CONN = new mysqli($MYSQL_HOST , $MYSQL_UNAME, $MYSQL_PWD, $MYSQL_DB)){
    echo 'Could not connect to database'; exit;
}
?>
<script language="javascript">
    function navigateTo(url){
        location.href= '<?php echo $url_prefix; ?>' + url;
    }

    var boolToPersoStateIndex = function(bool) {return bool * 1;};

    function toggleMenu(){
        var $divGlobalMenu = $('#divGLOBAL_MENU');
        var thisState = $('#menuButton').data('state');

        switch(thisState){
            case 0:
                $divGlobalMenu.css('display', 'block').animate({
                    height: '500px'
                }, 300);
                $('#menuButton').data('state', 1);
                break;

            case 1:
                $divGlobalMenu.animate({height: '1px'}, 300, function(){
                    $divGlobalMenu.css('display', 'none');
                });

                $('#menuButton').data('state', 0);
                break;
        }
    }

    $(document).ready(function() {
        //Initialize States [1, 0]; 1=OFF and 0=ON
        var headerHeights = [
            {height: '120px'},
            {height: '200px'}
        ];
        var headerColors = [{backgroundColor: '#00847c'}, {backgroundColor: '#00847c'}];
        var headerTop = [
            {height: '50px', padding: '12px 0 10px'},
            {height: '110px', padding: '30px 0'}
        ];
        var headerBrandingLogo = [
            {width: '250px', height: '30px'},
            {width: '459px', height: '55px'}
        ];

        var headerTopMenu = [
            {height: '1px'},
            {height: '60px'}
        ];

        var headerTopWULogo = [
            {height: '50px', margin: '-10px 0 -10px 0'},
            {height: '1px', margin: '30px 0 -12px'}
        ];

        var headerNavigation = [
            {height: '70px'},
            {height: '90px'}
        ];

        var headerNavigationItem = [
            {padding: '15px 0 5px', fontSize: '80%'},
            {padding: '20px 0 10px', fontSize: '100%'}
        ];

        //for divPERSO_MENU
        var boolToStateIndex = function(bool) {return bool * 1;};

        //Change Heights
        var toggleHeaderState = function(condState) {
            //Use Header as object to check state
            var $divHeader = $('#divHEADER');
            var $divHeaderTop = $('#divHEADER .top');
            var $divHeaderBranding = $('#divHEADER .top .branding');
            var $divHeaderTopMenu = $('#divHEADER .top .topMenu');
            var $divHeaderTopWULogo = $('#divHEADER .top .smallWULogo');

            //Header Navigation
            var $divHeaderNavigation = $('#divHEADER .navigation');
            var $divHeaderNavigationItem = $('#divHEADER .navigation .item');

            //Global Menu
            var $divGlobalMenu = $('#divGLOBAL_MENU');


            var navState = $divHeader.data('state');

            //Body
            var $divBody = $('#divBODY');

            if (navState === condState) {
                //changeNavHeight(nav, subhead, boolToStateIndex(!navState));
                var newStateIndex = boolToStateIndex(!navState);

                //Change Header Height
                $divHeader.data('state', newStateIndex).stop().animate({
                    height: headerHeights[newStateIndex].height,
                    backgroundColor: headerColors[newStateIndex].backgroundColor
                }, 300);

                $divHeaderTop.animate({
                    height: headerTop[newStateIndex].height,
                    padding: headerTop[newStateIndex].padding
                }, 300);

                $divHeaderBranding.animate({
                    width: headerBrandingLogo[newStateIndex].width,
                    height: headerBrandingLogo[newStateIndex].height
                }, 300);

                $divHeaderNavigation.animate({
                    height: headerNavigation[newStateIndex].height
                }, 300);

                $divHeaderNavigationItem.animate({
                    padding: headerNavigationItem[newStateIndex].padding,
                }, 300);

                $divHeaderNavigationItem.css('font-size', headerNavigationItem[newStateIndex].fontSize);

                if(newStateIndex){
                    //On State
                    $('#divHEADER .navigation .wuLogo').css('display', 'block');
                    $('#menuButton').css('display', 'none');

                    $divHeaderTopMenu.css('display', 'block').animate({
                        height: headerTopMenu[newStateIndex].height
                    }, 300);

                   /* $divHeaderTopWULogo.css('display', 'none');*/

                    $divHeaderTopWULogo.css('display', 'none').animate({
                        height: headerTopWULogo[newStateIndex].height,
                        margin: headerTopWULogo[newStateIndex].margin
                    }, 300);

                    $divGlobalMenu.css('display', 'none');
                    $('#menuButton').data('state', 0);
                }else{
                    //Off State
                    $('#divHEADER .navigation .wuLogo').css('display', 'none');
                    $('#menuButton').css('display', 'table');

                    $divHeaderTopMenu.animate({
                        height: headerTopMenu[newStateIndex].height
                    }, 300, function(){
                        $divHeaderTopMenu.css('display', 'none');

                        //$divHeaderTopWULogo.css('display', 'block');

                        $divHeaderTopWULogo.css('display', 'block').animate({
                            height: headerTopWULogo[newStateIndex].height,
                            margin: headerTopWULogo[newStateIndex].margin
                        }, 100);
                    });
                }

                $divBody.animate({marginTop: headerHeights[newStateIndex].height}, 300);
            }
        };


        //Set State
        if($(window).width() > 1400){
            $('#divHEADER').data('state', 1);
        }else{
            $('#divHEADER').data('state', 0);
        }

        //Scroller Menu Animation
        $(window).scroll(function(){
            if($(window).width() > 1400){
                if ($(document).scrollTop() > 80) {
                    toggleHeaderState(1);
                } else {
                    toggleHeaderState(0);
                }
            }
        });

        $('#searchText').val('').keypress(function (e) {
            if (e.which == 13) {
                $('#frmSearch').submit()
            }
        });

        $('#menuButton').data('state', 0);
    })

</script>
<style>

</style>
<div id="divGLOBAL_MENU">
    <div class="innerContainer">
        <div class="item" title="Menu (Find Locations)" onClick="navigateTo('locations')" style="margin-top: 20px">Locations & Hours</div>
        <div class="item" title="Menu (Contact Us)" onClick="navigateTo('contactUs')">Contact Us</div>
        <div class="item" title="Menu (Employment Opportunities)" onClick="navigateTo('employment')">Employment</div>
        <div class="item" title="Menu (About Us)" onClick="navigateTo('aboutUs')">About Us</div>
        <div class="divider">&nbsp;</div>
        <div class="item" title="Go to Check Checking" onClick="navigateTo('checkCashing')">Personal Check Cashing</div>
        <div class="item" title="Go to Business Check Cashing"  onClick="navigateTo('businessCheckCashing')">Business Check Cashing</div>
        <div class="item" title="Go to Direct Deposit" onClick="navigateTo('directDeposits')">Direct Deposit</div>
        <div class="item" title="Go to Bill Pay" onClick="navigateTo('billPay')">Bill Pay</div>
        <div class="item" title="Go to Products" onClick="navigateTo('products')">Prepaid Products</div>
        <div class="item" title="Go to Services" onClick="navigateTo('services')">Convenience Services</div>
        <div class="item" title="Go to Bonus Bucks" onClick="navigateTo('bonusBucks')">Bonus Bucks</div>
        <div class="divider">&nbsp;</div>
        <div class="item" title="Menu (About Us)" onClick="navigateTo('search/results.php')">Search</div>
    </div>
</div>
<div id="divHEADER">
    <div class="top">
        <div class="innerContainer">
            <div class="branding" title="Davids Financial Logo" onClick="location.href='<?php echo $url_prefix; ?>'">&nbsp;</div>
            <div class="topMenu">
                <div class="searchItem" style="width: auto;">
                    <form id="frmSearch" name="frmSearch" action="<?php echo $url_prefix; ?>search/results.php" method="POST" enctype="application/x-www-form-urlencoded">
                        <input id="searchText" name="searchText" class="search" type="text" value="" alt="Search text box">
                    </form>
                </div>
                <div class="item" data-icon="about" data-state="<?php echo $menuState['aboutUs'] ?>" title="Menu (About Us)" onClick="navigateTo('aboutUs')"></div>
                <div class="item" data-icon="employment" data-state="<?php echo $menuState['employment'] ?>" title="Menu (Employment Opportunities)" onClick="navigateTo('employment')"></div>
                <div class="item" data-icon="contact" data-state="<?php echo $menuState['contactUs'] ?>" title="Menu (Contact Us)" onClick="navigateTo('contactUs')"></div>
                <div class="item" data-icon="location" data-state="<?php echo $menuState['locations'] ?>" title="Menu (Find Locations)" onClick="navigateTo('locations')"></div>
            </div>
            <div class="smallWULogo" onClick="navigateTo('moneyTransfers')"><img src="<?php echo $url_prefix; ?>_images/topMenu_wuLogo.png"></div>
        </div>
    </div>
    <div class="navigation">
        <div class="innerContainer">
            <div id="menuButton" onClick="toggleMenu()">e</div>
            <div class="item" title="Go to Check Checking"  data-state="<?php echo $menuState['checkCashing'] ?>" onClick="navigateTo('checkCashing')"><span>PERSONAL</span><span>CHECK CASHING</span></div>
            <div class="item" title="Go to Business Check Cashing" data-value="businessCheckCashing" data-state="<?php echo $menuState['businessCheckCashing'] ?>" onClick="navigateTo('businessCheckCashing')"><span>BUSINESS</span><span>CHECK CASHING</span></div>
            <div class="item" title="Go to Direct Deposit" data-state="<?php echo $menuState['directDeposits'] ?>" onClick="navigateTo('directDeposits')"><span>DIRECT</span><span>DEPOSIT</span></div>
            <div class="item" title="Go to Bill Pay" data-state="<?php echo $menuState['billPay'] ?>" onClick="navigateTo('billPay')"><span>BILL</span><span>PAY</span></div>
            <div class="item" title="Go to Products" data-state="<?php echo $menuState['products'] ?>" onClick="navigateTo('products')"><span>PREPAID</span><span>PRODUCTS</span></div>
            <div class="item" title="Go to Services" data-state="<?php echo $menuState['services'] ?>" onClick="navigateTo('services')"><span>CONVENIENCE</span><span>SERVICES</span></div>
            <div class="item" title="Go to Bonus Bucks" data-value="bonusBucks" data-state="<?php echo $menuState['bonusBucks'] ?>" onClick="navigateTo('bonusBucks')"><span>BONUS</span><span>BUCKS</span></div>
            <div class="wuLogo" title="Western Union Services" onClick="navigateTo('moneyTransfers')"><img src="<?php echo $url_prefix; ?>_images/westernUnionLogo.gif" style="width: 250px;"></div>
        </div>
    </div>
</div>
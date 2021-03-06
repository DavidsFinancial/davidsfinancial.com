<style>
    #storeFinder {
        display: table;
        float: left; clear: both;
        width: 100%;
        background-color: #00847c;
        border-radius: 8px;
        margin: 10px 0;
    }

    #storeFinder .icon {
        font-family: "menu", Arial, Helvetica, sans-serif;
        position: absolute;
        color: #FFF;
        margin: 0 0 0 10px;
    }

    #storeFinder .icon::after {
        content: 'b';  font-size: 150%;
    }

    #storeFinder .title {
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 100%;
        color: #FFF;
        margin: 0; padding: 15px 0 10px; box-sizing: border-box;
        text-align: center;
    }

    #storeFinder .subTitle {
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 110%;
        color: #bdffd3;
        margin: 0; padding: 0 0 15px; box-sizing: border-box;
        text-align: center;
    }

    #storeFinder .list {
        display: table;
        background-color: #FFF;
        width: 90%;
        margin: 0 auto 15px; padding: 10px; box-sizing: border-box;
    }

    #storeFinder .list .item {
        display: inline-block;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        width: 49%;
        margin: 0 auto; padding: 10px 5px; box-sizing: border-box;
        cursor: pointer;
        border-radius: 20px;
        color: #000;
    }

    #storeFinder .list .item:hover {
        background-color: #000;
        color: #FFFF00;
    }

    @media screen and (max-width: 1250px){
        #storeFinder .subTitle { font-size: 1.6vw; }
        #storeFinder .list .item { width: 100%; font-size: 90%; padding: 8px; }
    }

    @media screen and (max-width: 880px){
        #storeFinder .subTitle { font-size: 11pt; }
        #storeFinder { width: 48%; margin: 0 0 0 2%; float: left; clear: none; }
    }

    @media screen and (max-width: 570px){
        #storeFinder { width: 100%; margin: 10px auto; float: none; display: inline-block }
    }
</style>
<div id="storeFinder">
    <div class="title"><div class="icon"></div>STORE FINDER</div>
    <div class="subTitle">WHAT'S NEAR YOU?</div>
    <div class="list">
        <div class="item" onClick="location.href='<?php echo $url_prefix; ?>locations/#mahattan'">Manhattan</div>
        <div class="item" onClick="location.href='<?php echo $url_prefix; ?>locations/#queens'">Queens</div>
        <div class="item" onClick="location.href='<?php echo $url_prefix; ?>locations/#brooklyn'">Brooklyn</div>
        <div class="item" onClick="location.href='<?php echo $url_prefix; ?>locations/#bronx'">Bronx</div>
        <div class="item" onClick="location.href='<?php echo $url_prefix; ?>locations/#rockland'">Rockland</div>
    </div>
</div>
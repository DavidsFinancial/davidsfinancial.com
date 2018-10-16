<style>
    #ebtSchedule {
        display: table;
        float: left; clear: both;
        width: 100%;
        background-color: #00847c;
        border-radius: 8px;
        margin: 10px 0; padding: 15px 5px; box-sizing: border-box;
        cursor: pointer;
        color: #FFF;
    }

    #ebtSchedule:hover {
        background-color: #000;
        color: #FFFF00;
    }

    #ebtSchedule .icon {
        font-family: "menu", Arial, Helvetica, sans-serif;
        color: #FFF;
        margin: -3px 25px 0 10px;
        float: left;
    }

    #ebtSchedule .icon::after {
        content: 'B';  font-size: 140%;
    }

    #ebtSchedule .label {
        float: left;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 100%;
        color: inherit;
    }

    #ebtSchedule .link {
        font-family: "menu", Arial, Helvetica, sans-serif;
        font-weight: normal !important;
        float: right;
        color: #FFF;
        margin: -3px 10px 0 0;
    }

    #ebtSchedule .link::after {
        content: 'w';  font-size: 140%;
    }
</style>
<div id="ebtSchedule" onClick="window.open('<?php echo $url_prefix; ?>/_assets/ebtSchedule.pdf')">
    <div class="icon"></div>
    <div class="label">VIEW EBT SCHEDULE</div>
    <div class="link"></div>
</div>
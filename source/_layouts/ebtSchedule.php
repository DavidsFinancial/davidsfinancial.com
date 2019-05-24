<style>
    #ebtSchedule {
        display: table;
        float: left; clear: both;
        width: 100%;
        background-color: #00847c;
        border-radius: 8px;
        margin: 10px 0; padding: 10px 5px; box-sizing: border-box;
        cursor: pointer;
        color: #FFF;
    }

    #ebtSchedule:hover {
        background-color: #000;
        color: #FFFF00;
    }

    #ebtSchedule .icon {
        display: table-cell;
        font-family: "menu", Arial, Helvetica, sans-serif;
        color: #FFF;
        padding: 0; box-sizing: border-box;
    }

    #ebtSchedule .icon::after {
        content: 'B';  font-size: 120%;
    }

    #ebtSchedule .label {
        display: table-cell;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 90%;
        color: inherit;
        vertical-align: top;
        padding: 5px; box-sizing: border-box;
    }

    #ebtSchedule .link {
        display: table-cell;
        font-family: "menu", Arial, Helvetica, sans-serif;
        font-weight: normal !important;
        color: #FFF;
        padding: 0; box-sizing: border-box;
    }

    #ebtSchedule .link::after {
        content: 'w';  font-size: 120%;
    }

    @media screen and (max-width: 1250px){
        #ebtSchedule .icon, #ebtSchedule .link { padding: 5px; }
        #ebtSchedule .icon::after, #ebtSchedule .link::after { font-size: 1.5vw; }
    }

    @media screen and (max-width: 880px){
        #ebtSchedule { width: 100%; margin: 30px auto 0; float: left; clear: both; display: table; }
        #ebtSchedule .icon::after, #ebtSchedule .link::after { font-size: 90%; }
    }

    @media screen and (max-width: 570px){
        #ebtSchedule { width: 100%; margin: 0 auto; float: none; display: table; }
        #ebtSchedule .icon { padding: 5px; width: 15%; text-align: left; }
        #ebtSchedule .link { padding: 5px; width: 15%; text-align: right }
        #ebtSchedule .label { width: 70%; text-align: center; }
        #ebtSchedule .icon::after, #ebtSchedule .link::after { font-size: 100%; }
    }
</style>
<div id="ebtSchedule" style="display: none;">
    <div class="icon"></div>
    <div class="label">VIEW EBT SCHEDULE</div>
    <div class="link"></div>
</div>
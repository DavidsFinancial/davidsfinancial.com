<style>
    #calculator {
        display: table;
        float: left; clear: both;
        width: 100%;
        border: 3px solid #00847c;
        border-radius: 8px;
        margin: 10px 0; padding: 15px 5px; box-sizing: border-box;
        background-image: url('<?php echo $url_prefix; ?>_images/calculator_bkg.png');
        background-repeat: no-repeat;
        background-position: -200px -10px;
    }

    #calculator .icon {
        float: left; clear: none;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 150%;
        color: #FFF;
        margin: 0 0 0 10px;
    }

    #calculator .title {
        float: right; clear: none; width: auto;
        text-align: right;
        margin: 0; padding: 0 15px 10px; box-sizing: border-box;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 110%;
        line-height: 120%;
    }

    #calculator .description {
        float: left; clear: both; width: 100%;
        font-family: "raleway-medium", Arial, Helvetica, sans-serif;
        font-size: 85%;
        line-height: 130%;
        padding: 0 15px; box-sizing: border-box;
    }

    #calculator .table {
        display: table;
        float: left; clear: both; width: 100%;
        padding: 20px; box-sizing: border-box;
    }

    #calculator .table .row {
        display: table-row;
    }

    #calculator .table .row .field {
        display: table-cell;
        text-align: center;
        width: 50%;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 85%;
    }

    #calculator .button {
        float: left; clear: both; width: 100%;
    }

    #calculator .table .row .inputs {
        display: table-cell;
        text-align: center;
        vertical-align: top;
        width: 50%;
    }

    #calculator .table .row .inputs input {
        float: left;
        border: 2px solid #AAA;
        margin: 10px 0; padding: 6px; box-sizing: border-box;
        border-radius: 20px;
        width: 95%;
        text-align: right;
        font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
        font-size: 110%;
    }

    #calculator .table .row .inputs #feeTotal {
        float: right;
        background-color: #666;
        border: 2px solid #000;
        margin: 10px 0; padding: 8px; box-sizing: border-box;
        width: 90%;
        font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
        font-size: 110%;
        color: #FFF;
        text-align: right;
    }

    #calculator .btnCalculate {
        margin: 0 auto; padding: 15px 10px;
        font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
        font-size: 100%;
        color: #FFF;
        background-color: #00847c;
        width: 80%;
        border-radius: 20px;
        cursor: pointer;
    }

    #calculator .btnCalculate:hover {
        background-color: #000;
        color: #FFFF00
    }

</style>
<div id="calculator">
    <div class="icon">$</div>
    <div class="title">CHECK CASHING <br>FEE CALCULATOR</div>
    <div class="description">The fees shown here are based on payroll or government checks. Commercial checks may have slightly higher fees. Please see store for details.</div>
    <div class="table">
        <div class="row">
            <div class="field">Check Amount</div>
            <div class="field">Fee Total</div>
        </div>
        <div class="row">
            <div class="inputs"><input type="text" placeholder="0.00"></div>
            <div class="inputs"><div id="feeTotal">0.00</div></div>
        </div>
    </div>
    <div class="button">
        <div class="btnCalculate">CALCULATE</div>
    </div>
</div>
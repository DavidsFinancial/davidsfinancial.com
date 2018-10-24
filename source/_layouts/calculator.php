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
        background-color: #FFF;
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

    @media screen and (max-width: 1400px){
        #calculator {  background-position: -220px -20px; }
        #calculator .icon { margin: -10px 0 0 10px; }
        #calculator .title { font-family: "raleway-bold", Arial, Helvetica, sans-serif; font-size: 80%; }
        #calculator .table .row .inputs input, #calculator .table .row .inputs #feeTotal { margin: 5px 0; }
        #calculator .btnCalculate { font-size: 1.5vw; padding: 10px; }
        #calculator .table { padding: 10px 12px; }
    }

    @media screen and (max-width: 880px){
        #calculator .title { font-size: 100%; }
        #calculator { width: 50%; margin: 0; float: left; clear: none; }
    }

    @media screen and (max-width: 570px){
        #calculator .title { font-size: 100%; }
        #calculator { width: 100%; float: none; display: inline-block; margin: 0 auto;}
        #calculator .btnCalculate { width: 91%; font-size: 12pt; padding: 10px; }
    }
</style>
<script language="javascript">
    var percent = 0.0207;

    function Calculate() {
        $('#feeTotal').html('<img src="<?php echo $url_prefix; ?>_images/loading_circleRing.svg" style="height: 15px;">');
        var amount = parseFloat($('#calc-check-amount').val());
        if (isNaN(amount)) {
            amount = $('#calc-check-amount').val();
            amount = amount.substr(1);
        }

        var fee = (amount * percent).toFixed(2);
        if (fee < 1) {
            if (fee == 0) {
                fee = 0;
            } else {
                fee = 1;
            }
        }

        $('#feeTotal').animate({opacity:.5}, 100, "linear").animate({
            opacity: 1
        }, 100, "linear", function() {
            $('#feeTotal').html(fee);
        })
    }
    $(document).ready(function() {
        $('#calc-check-amount').val(0);
        $('#feeTotal').html('0.00');
    });
</script>
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
            <div class="inputs"><input type="text" placeholder="0.00" id="calc-check-amount" value=""></div>
            <div class="inputs"><div id="feeTotal">0.00</div></div>
        </div>
    </div>
    <div class="button">
        <div class="btnCalculate" onClick="Calculate()">CALCULATE</div>
    </div>
</div>
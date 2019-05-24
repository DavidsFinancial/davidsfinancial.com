<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Location & Hours | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .col1 {
            width: 100% !important;
        }

        .locationSection {
            display: table;
            width: 100%;
        }

        .locationSection .fields {
            display: table-row;
            width: 100%;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            color: #000;
        }

        .locationSection .fields .label {
            display: table-cell;
            text-align: left;
            padding: 0 10px 10px 0; box-sizing: border-box;
        }

        .locationSection .data {
            display: table-row;
            width: 100%;
            font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #000;
        }

        .locationSection .data .value {
            display: table-cell;
            text-align: left;
            vertical-align: top;
            border-top: 1px dotted #AAA;
            padding: 10px 20px 10px 0; box-sizing: border-box;
        }

        .locationSection .data .value span {
            display: table;
            line-height: 130%;
            font-size: 90%;
        }

        .locationSection .fields .label[data-width="location"], .locationSection .data .value[data-width="location"] { width: 22%; }
        .locationSection .fields .label[data-width="telephone"], .locationSection .data .value[data-width="telephone"] { width: 15%; }
        .locationSection .fields .label[data-width="storeHours"], .locationSection .data .value[data-width="storeHours"] { width: 20%; }
        .locationSection .fields .label[data-width="transportation"], .locationSection .data .value[data-width="transportation"] { width: 35%; }
        .locationSection .fields .label[data-width="map"], .locationSection .data .value[data-width="map"] { width: 8%; }

        .trainBusDiv {
            display: table;
            float: left; clear: both;
            width: 100%;
            margin-bottom: 10px;
        }

        .trainIcon {
            display: inline-block;
            float: left; clear: none;
            font-family: "OpenSans-Bold", Arial, Helvetica, sans-serif;
            font-size: 110%;
            width: 34px; height: 34px;
            margin: 0 5px 5px 0; padding-top: 7px; box-sizing: border-box; overflow: hidden;
            border-radius: 20px;
            text-align: center;
        }

        .red {background-color: #EE352E; color: #FFF}
        .blue {background-color: #0039A6; color: #FFF}
        .orange {background-color: #FF6319; color: #FFF}
        .lightGreen {background-color: #6CBE45; color: #FFF}
        .brown {background-color: #996633; color: #FFF}
        .grey {background-color: #808183; color: #FFF}
        .yellow {background-color: #FCCC0A; color: #000}
        .green {background-color: #00933C; color: #FFF}
        .lightGrey {background-color: #A7A9AC; color: #FFF}
        .purple {background-color: #B933AD; color: #FFF}

        .busIcon {
            float: left; clear: none;
            font-family: "OpenSans-Bold", Arial, Helvetica, sans-serif;
            font-size: 90%;
            margin: 0 5px 5px 0; padding: 7px 9px; box-sizing: border-box;
            border-radius: 20px;
            color: #FFF;
            background-color: #000;
        }

        .mapLink {
            border: 1px solid #EEE;
            padding: 3px 5px; box-sizing: border-box;
            cursor: pointer;
            text-align: center;
        }

        .mapLink:hover {
            background-color: #ecfffe;
            border: 1px solid #00847c;
        }

        .viewMap {
            font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
            font-size: 80%;
        }

        .viewMap::after {
            content: 'Click to View Map'
        }

        @media screen and (max-width: 1024px){
            .locationSection .data { font-size: 90%; }
        }

        @media screen and (max-width: 880px){
            .trainIcon { font-size: 100%; width: 30px; height: 28px;}
            .busIcon { font-size: 85%;}
            .mapLink img { width: 30px; }

            .viewMap::after {
                content: 'Open Map'
            }
        }

        @media screen and (max-width: 880px){
            .locationSection {display: table; width: 100%; text-align: center !important; padding: 0 !important; }
            .locationSection .fields {display: none; }
            .locationSection .data { display: table; width: 100%; text-align: center !important; border-top: 1px dotted #000; padding: 15px; box-sizing: border-box;}
            .locationSection .data .value { display: table; width: 100% !important; text-align: center !important; border-top: none; padding; 0; }
            .locationSection .data .value span { text-align: center; width: 100%; padding; 0;  }
            .trainBusDiv {  text-align: center; width: 100%;  }
            .trainIcon{ float: none; }
            .busIcon { display: inline-block; float: none; width: auto; margin: 5px; }
            .locationSection .data .value[data-width="location"] { font-family: "OpenSans-Bold", Arial, Helvetica, sans-serif; font-size: 120%;}
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">LOCATIONS & HOURS</div>
            <div class="col1">
                <div class="sectionTitle"><div class="iconBullet"></div><a name="bronx">BRONX</a></div>
                <div class="locationSection">
                    <div class="fields">
                        <div class="label" data-width="location">Location</div>
                        <div class="label" data-width="telephone">Telephone</div>
                        <div class="label" data-width="storeHours">Store Hours</div>
                        <div class="label" data-width="transportation">Transportation</div>
                        <div class="label" data-width="map">Map</div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>3015 Third Ave.</span>
                            <span>Bronx, NY 10455</span>
                        </div>
                        <div class="value" data-width="telephone">718-585-3943</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 7:30am - 10:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">2</div>
                                <div class="trainIcon green">5</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">BX55</div>
                                <div class="busIcon">BX15</div>
                                <div class="busIcon">BX21</div>
                                <div class="busIcon">BX41</div>
                                <div class="busIcon">BX4</div>
                                <div class="busIcon">BX19</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=3015+Third+Ave.+Bronx,+NY+10455+&hl=en&ll=40.819489,-73.913725&spn=0.001695,0.002411&sll=37.0625,-95.677068&sspn=57.292148,79.013672&vpsrc=6&hnear=3015+3rd+Ave,+Bronx,+New+York+10455&t=m&z=19')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>1998 Bruckner Blvd</span>
                            <span>Bronx, NY 10473</span>
                        </div>
                        <div class="value" data-width="telephone">718-430-9382</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="busIcon">BX5</div>
                                <div class="busIcon">BX36</div>
                                <div class="busIcon">BX39</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=3015+Third+Ave.+Bronx,+NY+10455+&hl=en&ll=40.819489,-73.913725&spn=0.001695,0.002411&sll=37.0625,-95.677068&sspn=57.292148,79.013672&vpsrc=6&hnear=3015+3rd+Ave,+Bronx,+New+York+10455&t=m&z=19')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>868 Prospect Avenue</span>
                            <span>Bronx, NY 10459</span>
                        </div>
                        <div class="value" data-width="telephone">7718-842-6699</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">2</div>
                                <div class="trainIcon green">5</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">BX4</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=868+Prospect+Avenue&hl=en&sll=40.825631,-73.859367&sspn=0.106645,0.154324&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>279 East 161 Street</span>
                            <span>Bronx, NY 10451</span>
                        </div>
                        <div class="value" data-width="telephone">718-665-6279</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon green">4</div>
                                <div class="trainIcon blue">C</div>
                                <div class="trainIcon orange">D</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">BX2</div>
                                <div class="busIcon">BX6</div>
                                <div class="busIcon">BX32</div>
                                <div class="busIcon">BX41</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=279+East+161+Street+&hl=en&sll=40.755821,-73.982109&sspn=0.427029,0.617294&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>3963 Laconia Ave</span>
                            <span>Bronx, NY 10466</span>
                        </div>
                        <div class="value" data-width="telephone">718-881-8870</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Tue 8:30am - 5:30pm</span>
                            <span>Wed 8:30am - 6:00pm</span>
                            <span>Thu-Fri 8:30am - 7:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">2</div>
                                <div class="trainIcon green">5</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">BX31</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=3963+Laconia+Ave&hl=en&sll=40.825444,-73.917979&sspn=0.006665,0.009645&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div><a name="manhattan">MANHATTAN</a></div>
                <div class="locationSection">
                    <div class="fields">
                        <div class="label" data-width="location">Location</div>
                        <div class="label" data-width="telephone">Telephone</div>
                        <div class="label" data-width="storeHours">Store Hours</div>
                        <div class="label" data-width="transportation">Transportation</div>
                        <div class="label" data-width="map">Map</div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>89 East 116th Street</span>
                            <span>NY, NY 10029</span>
                        </div>
                        <div class="value" data-width="telephone">212-369-8550</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon green">6</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">M98</div>
                                <div class="busIcon">M101</div>
                                <div class="busIcon">M102</div>
                                <div class="busIcon">M103</div>
                                <div class="busIcon">M116</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=89+East+116th+Street&hl=en&sll=40.747688,-74.048227&sspn=0.006673,0.009645&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>110 West 116th Street</span>
                            <span>NY, NY 10026</span>
                        </div>
                        <div class="value" data-width="telephone">212-662-5916</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">2</div>
                                <div class="trainIcon red">3</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">M2</div>
                                <div class="busIcon">M7</div>
                                <div class="busIcon">M18</div>
                                <div class="busIcon">M116</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=110+West+116th+Street&hl=en&sll=37.0625,-95.677068&sspn=55.981213,79.013672&vpsrc=0&hnear=110+W+116th+St,+New+York,+10026&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>2802 Frederick Douglas Blvd.</span>
                            <span>NY, NY 10039</span>
                        </div>
                        <div class="value" data-width="telephone">212-491-1933</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">3</div>
                                <div class="trainIcon orange">D</div>
                                <div class="trainIcon orange">B</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">M10</div>
                                <div class="busIcon">M2</div>
                                <div class="busIcon">BX19</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=2802+Frederick+Douglass+Blvd.&hl=en&sll=40.806348,-73.942074&sspn=0.006619,0.009645&vpsrc=0&hnear=2802+Frederick+Douglass+Blvd,+Manhattan,+New+York+10039&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>728 Amsterdam Ave</span>
                            <span>New York, NY, 10025</span>
                        </div>
                        <div class="value" data-width="telephone">212-666-2610</div>
                        <div class="value" data-width="storeHours">
                            <span>OPEN 24 HOURS</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">1</div>
                                <div class="trainIcon red">2</div>
                                <div class="trainIcon red">3</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('https://maps.google.com/maps?q=728+Amsterdam+Ave,+New+York+City,+NY+10025&hl=en&ll=40.793831,-73.970797&spn=0.01051,0.009484&sll=40.785564,-73.976789&sspn=0.010512,0.009484&oq=728+Amsterdam+Ave,+New+York,+NY,+10025&hnear=728+Amsterdam+Ave,+New+York,+10025')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>468-470 Amsterdam Ave</span>
                            <span>New York, NY, 10024</span>
                        </div>
                        <div class="value" data-width="telephone">212-787-7572</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">1</div>
                                <div class="trainIcon red">2</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">M10</div>
                                <div class="busIcon">M2</div>
                                <div class="busIcon">BX19</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('https://maps.google.com/maps?q=468-470+Amsterdam+Ave,+New+York+City,+NY+10024&hl=en&sll=41.500765,-72.757507&sspn=1.330888,1.213989&oq=468-470+Amsterdam+Ave,+New+York,+NY,+10024&hnear=470+Amsterdam+Ave,+New+York,+10024&t=m&z=16')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>458 west 55th street</span>
                            <span>NY, NY 10019</span>
                        </div>
                        <div class="value" data-width="telephone">646-882-4049</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="busIcon">M11</div>
                                <div class="busIcon">M31</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('https://www.google.com/maps/place/826+10th+Ave/@40.76755,-73.989293,17z/data=!4m2!3m1!1s0x89c2585a2432078b:0x6420a4d9785e625b?hl=en')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div><a name="brooklyn">BROOKLYN</a></div>
                <div class="locationSection">
                    <div class="fields">
                        <div class="label" data-width="location">Location</div>
                        <div class="label" data-width="telephone">Telephone</div>
                        <div class="label" data-width="storeHours">Store Hours</div>
                        <div class="label" data-width="transportation">Transportation</div>
                        <div class="label" data-width="map">Map</div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>1534 Myrtle Avenue</span>
                            <span>Brooklyn, NY 11237</span>
                        </div>
                        <div class="value" data-width="telephone">718-366-2780</div>
                        <div class="value" data-width="storeHours">
                            <span>OPEN 24 HOURS</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon brown">M</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">B13</div>
                                <div class="busIcon">B52</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=1534+Myrtle+Avenue+(Linden+St.)+Brooklyn&hl=en&sll=41.202794,-73.984305&sspn=0.006627,0.009645&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>460 Rockaway Avenue</span>
                            <span>Brooklyn, NY 11212</span>
                        </div>
                        <div class="value" data-width="telephone">718-346-2323</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">3</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">M14</div>
                                <div class="busIcon">M60</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=460+Rockway+Avenue+(Between+Pitkin+Ave+%26+Belmont+Ave.)&hl=en&sll=40.825107,-73.938453&sspn=0.006617,0.009645&vpsrc=0&hnear=460+Rockaway+Ave,+Brooklyn,+Kings,+New+York+11212&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>581 Sutter Avenue</span>
                            <span>Brooklyn, NY 11207</span>
                        </div>
                        <div class="value" data-width="telephone">7718-385-1300</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">3</div>
                                <div class="trainIcon grey">L</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">B14</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=581+Sutter+Avenue+(Between+Georgia+Ave+%26+Alabama+Ave.)&hl=en&sll=40.66873,-73.910618&sspn=0.006632,0.009645&vpsrc=0&hnear=581+Sutter+Ave,+Brooklyn,+Kings,+New+York+11207&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>1234 Broadway</span>
                            <span>Brooklyn, NY 11221</span>
                        </div>
                        <div class="value" data-width="telephone">718-452-9000</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Tue 8:30am - 8:00pm</span>
                            <span>Wed 8:30am - 8:00pm</span>
                            <span>Thu-Fri 8:30am - 7:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon brown">J</div>
                                <div class="trainIcon brown">Z</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">B52</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=1234+Broadway,+Brooklyn,+New+York,+NY&hl=en&ll=40.69193,-73.926358&spn=0.009632,0.026071&sll=40.694104,-73.917711&sspn=0.009631,0.026071&vpsrc=0&hnear=1234+Broadway,+Brooklyn,+Kings,+New+York+11221&t=m&z=16')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>3137 Fulton St</span>
                            <span>Brooklyn, NY 11208</span>
                        </div>
                        <div class="value" data-width="telephone">718-647-3576</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon brown">J</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=3137+Fulton+St+&hl=en&sll=40.681683,-73.879122&sspn=0.006631,0.009645&vpsrc=0&hnear=3137+Fulton+St,+Brooklyn,+New+York+11208&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>1431 Broadway</span>
                            <span>Brooklyn, NY 11221</span>
                        </div>
                        <div class="value" data-width="telephone">718-443-4585</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon brown">J</div>
                                <div class="trainIcon brown">J</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">Q24</div>
                                <div class="busIcon">B47</div>
                                <div class="busIcon">B52</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=1431+Broadway,+Brooklyn,+NY+11221+&hl=en&sll=40.754584,-73.987121&sspn=0.006624,0.009645&vpsrc=0&hnear=1431+Broadway,+Brooklyn,+Kings,+New+York+11221&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>2912-14 Stillwell Avenue</span>
                            <span>Brooklyn, NY 11224</span>
                        </div>
                        <div class="value" data-width="telephone">718-373-0330</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon orange">D</div>
                                <div class="trainIcon orange">F</div>
                                <div class="trainIcon yellow">N</div>
                                <div class="trainIcon yellow">Q</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">B36</div>
                                <div class="busIcon">B64</div>
                                <div class="busIcon">B82</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=2912+Stillwell+Ave,+Brooklyn,+Kings,+New+York+11224&hl=en&ll=40.57669,-73.981397&spn=0.000929,0.002411&sll=40.576628,-73.981665&hnear=2912+Stillwell+Ave,+Brooklyn,+Kings,+New+York+11224&t=m&vpsrc=6&z=19')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>752 New Lots Avee</span>
                            <span>Brooklyn, NY 11207 </span>
                        </div>
                        <div class="value" data-width="telephone">718-649-6780</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon red">3</div>
                            </div>
                            <div class="trainBusDiv">
                                <div class="busIcon">B6</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=752+New+Lots+Ave&hl=en&ll=40.666121,-73.88267&spn=0.006632,0.009645&sll=40.672266,-73.89157&sspn=0.006632,0.009645&vpsrc=0&hnear=752+New+Lots+Ave,+Brooklyn,+New+York+11208&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div><a name="queens">QUEENS</a></div>
                <div class="locationSection">
                    <div class="fields">
                        <div class="label" data-width="location">Location</div>
                        <div class="label" data-width="telephone">Telephone</div>
                        <div class="label" data-width="storeHours">Store Hours</div>
                        <div class="label" data-width="transportation">Transportation</div>
                        <div class="label" data-width="map">Map</div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>23-05 31st Street</span>
                            <span>Astoria, NY 11105</span>
                        </div>
                        <div class="value" data-width="telephone">718-274-2243</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            <div class="trainBusDiv">
                                <div class="trainIcon yellow">N</div>
                                <div class="trainIcon yellow">W</div>
                            </div>
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=23-05+31st+Street+Astoria&hl=en&sll=41.090737,-74.00116&sspn=0.053109,0.077162&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div><a name="rockland">ROCKLAND</a></div>
                <div class="locationSection">
                    <div class="fields">
                        <div class="label" data-width="location">Location</div>
                        <div class="label" data-width="telephone">Telephone</div>
                        <div class="label" data-width="storeHours">Store Hours</div>
                        <div class="label" data-width="transportation">Transportation</div>
                        <div class="label" data-width="map">Map</div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>205 Route 59</span>
                            <span>Spring Valley, NY 10977</span>
                        </div>
                        <div class="value" data-width="telephone">845-352-4888</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat 8:30am - 5:00pm</span>
                            <span>Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            &nbsp;
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=205+Route+59,+Spring+Valley,+NY&hl=en&ll=41.108843,-74.042974&spn=0.001204,0.003259&sll=40.69193,-73.926358&sspn=0.009632,0.026071&vpsrc=0&hnear=205+New+York+59,+Spring+Valley,+Rockland,+New+York+10977&t=m&z=19')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>294 Main Street</span>
                            <span>Nyack, NY 10960</span>
                        </div>
                        <div class="value" data-width="telephone">845-358-5652</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 7:00pm</span>
                            <span>Sat 9:00am - 5:00pm</span>
                            <span>Sun CLOSED</span>
                        </div>
                        <div class="value" data-width="transportation">
                            &nbsp;
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=294+Main+Street+Nyack&hl=en&sll=40.774066,-73.912926&sspn=0.00667,0.009645&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>57-59 Rte. 9w South</span>
                            <span>West Haverstraw, NY 10977</span>
                        </div>
                        <div class="value" data-width="telephone">845-429-6808</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            &nbsp;
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('http://maps.google.com/maps?q=57-59+Rte.+9w+South+West+Haverstraw&hl=en&sll=41.11613,-74.153466&sspn=0.006636,0.009645&vpsrc=0&t=m&z=17')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <div class="value" data-width="location">
                            <span>76 East Route 59</span>
                            <span>Nanuet, NY 10954</span>
                        </div>
                        <div class="value" data-width="telephone">845-507-0150</div>
                        <div class="value" data-width="storeHours">
                            <span>Mon-Fri 8:30am - 8:00pm</span>
                            <span>Sat-Sun 9:00am - 5:00pm</span>
                        </div>
                        <div class="value" data-width="transportation">
                            &nbsp;
                        </div>
                        <div class="value" data-width="map">
                            <div class="mapLink" onClick="window.open('https://www.google.com/maps/place/76+New+York+59/@41.097973,-74.0151261,17z/data=!3m1!4b1!4m2!3m1!1s0x89c2e8124b50ac29:0xf91736109f7ecc3d?hl=en')">
                                <img src="<?php echo $url_prefix; ?>_images/googleMapIcon.png">
                                <div class="viewMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
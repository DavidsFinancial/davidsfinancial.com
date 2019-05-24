<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Accessibility | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .col1 {
            width: 100% !important;
        }

        .contactUs {
            font-family: "OpenSans-Semibold", Arial, Helvetica, sans-serif;
            font-size: 95%;
            color: #FFF;
            background-color: #00847c;
            padding: 8px 10px; box-sizing: border-box;
            border-radius: 10px;
            cursor: pointer;
        }

        .contactUs::after {
            font-family: "menu", Arial, Helvetica, sans-serif;
            font-size: 100%;
            font-weight: normal !important;
            content: 't';
            margin-left: 10px;
        }

        .contactUs:hover {
            background-color: #000;
            color: #FFFF00;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">ACCESSIBILITY</div>
            <div class="col1">
                <div class="subtitle">Davids Financial is committed to providing a website that is accessible to the widest possible audience. Davids Financial is actively working towards achieving a fully accessible website that endeavours to conform to the World Wide Web Consortium (W3C) Web Content Accessibility Guidelines (WCAG) 2.0.T</div>
                <div class="sectionTitle"><div class="iconBullet"></div>What we have done to make our site more accessible?</div>
                <div class="table" style="margin: 0 0 -10px 0;">
                    <div class="col_single">
                        <div class="item">Screen Resolution - This web site is designed to respond to the size of your screen. Resize your browser to the size that best suits your needs.</div>
                        <div class="item">Text Contrast Ratio - All text on this site has been created to have a contrast ratio over its background of over 4.5:1. This adheres to W3C Accessibility Guidelines 2.0 level AA.</div>
                        <div class="item">Image ALT tags - All content images on this site are provided with descriptive ALT attributes. Graphics that are purely decorative in function have empty ALT attributes, to prevent them from displaying on screen readers.</div>
                        <div class="item">Streamlined Navigation - All pages contain a link to the home page, sitemap and search box. The primary navigation has been built in a consistent fashion to provide clear navigation throughout the site. Secondary navigation is provided for way-finding through individual sections of the site.</div>
                        <div class="item">Linking - Links have been written to make sense out of context, title tags or spans of text only visible to screen readers have been used to expand on the meaning of short links.</div>
                    </div>
                </div>
                <div class="sectionTitle"><div class="iconBullet"></div>Further Assistance</div>
                <div class="content">If you have further questions or feedback relating to this website, please contact our Marketing Department via our <span class="contactUs" onClick="location.href='<?php echo $url_prefix; ?>contactUs'">Contact Us</span> page.</div>
                <div class="sectionTitle"><div class="iconBullet"></div>References & Related Links</div>
                <div class="content"><a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank" title="Web Content Accessibility Guidelines">Web Content Accessibility Guidelines</a></div>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
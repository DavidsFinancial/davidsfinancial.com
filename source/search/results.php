
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Search Results | Davids Financial</title>
    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../_css/MAIN.css">
    <?php require('../_layouts/javascripts.php') ?>
    <style>
        .col1 {
            width: 100% !important; margin-top: -20px; padding-left: 0 !important;
        }

        .content {
            float: left; width: 100%; text-indent: 0;
            margin: 0 !important; padding: 0 0 5px 0 !important;
        }

        .content a {
            color: #000;
        }

        .contentTitle {
            margin-top: 0;
        }

        .searchText {
            font-family: "OpenSans-Bold", Arial, Helvetica, sans-serif;
            font-size: 100%;
        }

        .result {
            float: left;
            width: 100%;
            font-family: "OpenSans-Regular", Arial, Helvetica, sans-serif;
            font-size: 100%;
            text-align: left;
            cursor: pointer;
            margin-bottom: 20px; padding: 10px; box-sizing: border-box;
            border: 1px solid #AAA;
        }

        .result:hover {
            background-color: #EEE;
        }

        .result .highlight {
            background-color: #FFFF00;
        }

        .result .page {
            display: table;
            float: left; clear: both; width: 100%;
        }

        .result .page .pgLabel {
            display: table;
            float: left; clear: none; width: auto;
            font-family: "raleway-semibold", Arial, Helvetica, sans-serif;
            font-size: 110%;
        }

        .result .page .pgIcon {
            display: table;
            float: left; clear: none; width: auto;  margin-right: 15px;
        }

        .result .page .pgIcon::after {
            font-family: "menu", Arial, Helvetica, sans-serif;
            content: 'A'
        }

        .result .snippet {
            float: left; clear: both; width: 100%;
            font-family: "raleway-medium", Arial, Helvetica, sans-serif;
            font-size: 100%;
            padding: 0 0 0 35px; box-sizing: border-box;
        }

        .result .url {
            float: left; clear: both; width: 100%;
            font-family: "raleway-bold", Arial, Helvetica, sans-serif;
            font-size: 85%;
            padding: 0 0 0 35px;
            color: #0039A6;
        }
    </style>
</head>
<body>
<div id="divCONTAINER">
    <?php require('../_layouts/header.php') ?>
    <?php

    //Search Database Content
    $result = $MYSQL_CONN->query("SELECT * FROM searchEngine WHERE UPPER(text) LIKE '%" . strtoupper($_POST['searchText']) ."%'");

    $searchResults = "";
    $resultsFound = 0;
    if (!$result) {
        $searchResults= "<div class='item'>No Results Found</div>";
    }else{
        while ($row = $result->fetch_assoc()) {
            $page = $row['page'];
            $text = $row['text'];
            $url = $row['url'];

            $numberOfTimesFound = substr_count($text, $_POST['searchText']);
            $resultsFound += $numberOfTimesFound;
            //Loop Through And Get Text Segments
            $offset = 0;
            for($x=0; $x < $numberOfTimesFound; $x++){
                $textPosition = stripos($text, $_POST['searchText'], $offset);
                $textSnippet = substr($text, $textPosition - 40, 100);

                //Find First Space
                $firstSpace = stripos($textSnippet, " ", 0);
                $textSnippet = substr($textSnippet, $firstSpace, 100);

                //Replace Found Text with highlighted text
                $textSnippet = str_replace($_POST['searchText'], "<span class='highlight'>" . $_POST['searchText'] . "</span>", $textSnippet);

                $searchResults .= '<div class="result" onClick="location.href=\''.$url_prefix.$url.'\'">
                                        <div class="page">
                                            <span class="pgIcon">&nbsp;</span><span class="pgLabel">'.$page.'</span>
                                         </div>
                                        <div class="snippet">"...' . $textSnippet . '..."</div>
                                        <div class="url">/' . $url . '</div>
                                   </div>';

                //Increase Offset
                $offset = $textPosition + 1;
            }
        }
    }

    mysqli_free_result($result);
    ?>
    <div id="divBODY">
        <div class="innerContainer">
            <div class="title">SEARCH RESULTS FOR (<span class="searchText"><?php echo $_POST['searchText'] ?></span>)</div>
            <div class="col1">
                <div class="contentTitle">Results Found: <?php echo $resultsFound ?></div>
                <div class="content">
                    <?php echo $searchResults; ?>
                </div>
            </div>
        </div>
    </div>
    <?php require('../_layouts/footer.php') ?>
</div>
</body>
</html>
<?php
//Get Billers
$servername = "davidsdb.cohh9xr3yvfr.eu-west-1.rds.amazonaws.com";
$username = "daveFinAWSUser";
$password = "efe45BN1M23";

// Create connection
if(!$MYSQL_CONN = mysql_connect($servername, $username, $password)){
    echo 'Could not connect to database'; exit;
}

// Check connection
if (!mysql_select_db('davidsFinDB1', $MYSQL_CONN)) {
    echo 'Could not select database'; exit;
}

$query = "SELECT * FROM billers ORDER BY title ASC";
$result = mysql_query($query, $MYSQL_CONN);

$billers = "";
if (!$result) {
    $billers = "<div class='item'>No Billers Found</div>";
}else{
    while ($row = mysql_fetch_assoc($result)) {
        $name = $row['title'];
        $nameTag = strtolower($row['title']);
        $nameTag = str_replace('.', '', $nameTag);
        $nameTag = str_replace('-', '',  $nameTag);
        $nameTag = str_replace('?', '',  $nameTag);
        $nameTag = str_replace('(', '',  $nameTag);
        $nameTag = str_replace(')', '',  $nameTag);
        $nameTag = str_replace('/', '',  $nameTag);
        $nameTag = str_replace('&', '',  $nameTag);
        $nameTag = str_replace("'", "",  $nameTag);
        $nameTag = str_replace(',', '',  $nameTag);

        //echo $nameTag ."<br>";
        $billers .= '<div class="itemBiller" data-value="' . $nameTag .'">' . $name . '</div>';
    }
}

mysql_free_result($result);

?>
<?php
    date_default_timezone_set('Europe/Berlin');
    echo date('d'); # Date
    echo "-";
    echo date('m'); # Month
    echo "-";
    echo date('y'); # Year
    echo "-";
    echo date('l'); # Day of the week
    echo '<br>';
    echo date('d-m-y-l'); # Formatted date call
    echo '<br>';
    echo date('h'); # Hours
    echo ":";
    echo date('i'); # Minutes
    echo ":";
    echo date('s'); # Seconds
    echo ":";
    echo date('a'); # AM or PM
    echo '<br>';
    echo date('h:i:s:a'); # Formatted time call
    echo '<br>';
    // Creating custom timestamps
    $timestamp = mktime(8, 15, 36, 4, 10, 2000);
    echo $timestamp;
    echo '<br>';
    // Reading custom timestamps
    echo date('d/m/y - h:i:s', $timestamp);
?>
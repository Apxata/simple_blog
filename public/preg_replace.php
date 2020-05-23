<?php
//    // Format: dd-mm-yyyy
    $string = '21-11-2015';
//
//    // Year 2015, month 11, day 21
//
    $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//
//    $replacement = 'Year $3, month $2, day $1';
//
//    echo preg_replace($pattern, $replacement, $string);

    // Month: 11, Day: 21, Year 2015

    $replacement = 'month $2, day $1, Year $3';
    echo preg_replace($pattern, $replacement, $string);
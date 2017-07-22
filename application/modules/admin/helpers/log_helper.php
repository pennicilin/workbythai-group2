<?php

function printlog($start, $end) {

    $strFileName = "printlog.txt";
    $objFopen = fopen($strFileName, 'w');
    
    $strText1 = "I Love ThaiCreate.Com Line1\r\n";
    fwrite($objFopen, $strText1);
    $strText2 = "I Love ThaiCreate.Com Line2\r\n";
    fwrite($objFopen, $strText2);
    $strText3 = "I Love ThaiCreate.Com Line3\r\n";
    fwrite($objFopen, $strText3);

    if ($objFopen) {
        echo "File writed.";
    } else {
        echo "File can not write";
    }

    fclose($objFopen);
    
}

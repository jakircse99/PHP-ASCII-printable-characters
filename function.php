<?php
function displayAsciiCode($ascii){
    $length = count($ascii);
    for($i = 0; $i < $length; $i++) {
        $dec = $ascii[$i];
        $symbol = chr($ascii[$i]);
        printf("<tr><td>%s</td><td>%s</td></tr>", $dec, $symbol );
    }
}

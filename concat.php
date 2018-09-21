<?php

function format_tel($tel)
{
    return $tel[0].$tel[1].'-'.$tel[2].$tel[3].'-'.$tel[4].$tel[5].'-'.$tel[6].$tel[7].'-'.$tel[8].$tel[9];
}

$tel = '0123456789';

for ($i = 0; $i < 1000000; $i++) {
    format_tel($tel);
}

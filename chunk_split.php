<?php

function format_tel($tel)
{
    $c = chunk_split($tel, 2, '-');
    return rtrim($c, '-');
}

$tel = '0123456789';

for ($i = 0; $i < 1000000; $i++) {
    format_tel($tel);
}

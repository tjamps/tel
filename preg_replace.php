<?php

function format_tel($tel)
{
    $pattern = '/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/';
    $replacement = '${1}-${2}-${3}-${4}-${5}';

    return preg_replace($pattern, $replacement, $tel);
}

$tel = '0123456789';

for ($i = 0; $i < 1000000; $i++) {
    format_tel($tel);
}

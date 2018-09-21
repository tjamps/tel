<?php

function format_tel($tel)
{
    return sprintf(
        '%s-%s-%s-%s-%s',
        substr($tel, 0, 2),
        substr($tel, 2, 2),
        substr($tel, 4, 2),
        substr($tel, 6, 2),
        substr($tel, 8, 2)
    );
}

$tel = '0123456789';

for ($i = 0; $i < 1000000; $i++) {
    format_tel($tel);
}

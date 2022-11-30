<?php
function randomPassword($psd_lgt)
{
    $pass = [];

    $lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $uppercase = array_map('strtoupper', $lettere);
    $num = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $caartteri = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];

    $array_totale = array_merge($lettere, $uppercase, $num, $caartteri);

    $lunghezza_tot = count($array_totale) - 1;

    for ($i = 0; $i < $psd_lgt; $i++) {
        $n = rand(0, $lunghezza_tot);
        $pass[] = $array_totale[$n];
    }
    return implode($pass);
}
?>
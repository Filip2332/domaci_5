<?php
if (isset($_GET["cena"]) && isset($_GET["kupljena_stvar"])) {

    $kupljenaStvar = $_GET["kupljena_stvar"];
    $cena = (float) $_GET["cena"];



if ($kupljenaStvar == "hrana") {
    $cena += 50;
} else if ($kupljenaStvar == "stvari_za_racunar") {
    $cena += 100;
}


if (isset($_GET["izracunaj_porez"])){
    $cena *= 1.05;
}

echo "Ukupna cena: $cena";
} else {
    echo "Niste uneli sve podatke.";
}


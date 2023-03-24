<?php

//kontroler
require_once dirname(__FILE__).'/../config.php';

//parametry
$kredyt = $_REQUEST ['kredyt'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];
$liczbaRat = $_REQUEST ['liczbaRat'];

//walidacja
//czy wartości zostały przekazane
if ($kredyt == "") {
    $messages [] = 'Nie podano kwoty kredytu';
}
if ($oprocentowanie == "") {
    $messages [] = 'Nie podano oprocentowania';
}
if ($liczbaRat == "") {
    $messages [] = 'Nie podano liczby rat';
}

//czy wartości są poprawne
if ($kredyt <= 0 && $kredyt != "") {
    $messages [] = 'Kwota kredytu nie może być mniejsza lub równa 0';
}
if (($oprocentowanie < 0 || $oprocentowanie > 20) && $oprocentowanie != "") {
    $messages [] = 'Kredyt nie może mieć oprocentowania poniżej 0% lub powyżej 20%';
}
if ($liczbaRat <= 0 && $liczbaRat != "") {
    $messages [] = 'Kredyt nie może mieć mniejszej liczby rat niż 1';
}

//obliczenia
if (empty($messages)) { // gdy brak błędów
    //konwersja parametrów na int
    $kredyt = intval($kredyt);
    $oprocentowanie = intval($oprocentowanie);
    $liczbaRat = intval($liczbaRat);
    if($oprocentowanie == 0) {
        $wynik = $kredyt/$liczbaRat;
    }
    else {
    $wynik1 = $kredyt * ($oprocentowanie/100);
    $wynik2 = 1 - (1 + ($oprocentowanie/100))**($liczbaRat*-1);
    $wynik = round($wynik1/$wynik2, 2);
    }
}

//wywołanie
include _ROOT_PATH.'/app/calc_view.php';

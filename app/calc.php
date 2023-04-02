<?php

require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH . '/lib/smarty/libs/Smarty.class.php';

function getParams(&$kredyt, &$oprocentowanie, &$liczbaRat) {
    $kredyt = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
    $oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
    $liczbaRat = isset($_REQUEST['liczbaRat']) ? $_REQUEST['liczbaRat'] : null;
}

//walidacja
function validate(&$kredyt, &$oprocentowanie, &$liczbaRat, &$messages) {
    if (!(isset($kredyt) && isset($oprocentowanie) && isset($liczbaRat))) {
        return false;
    }

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
    if (count($messages) != 0)
        return false;


    if (count($messages) != 0)
        return false;
    else
        return true;
}

//obliczenia
function process(&$kredyt, &$oprocentowanie, &$liczbaRat, &$messages, &$wynik) {
    global $role;

    $kredyt = doubleval($kredyt);
    $oprocentowanie = doubleval($oprocentowanie);
    $liczbaRat = intval($liczbaRat);

    if ($oprocentowanie == 0) {
        $wynik = $kredyt / $liczbaRat;
    } else {
        $wynik1 = $kredyt * ($oprocentowanie / 100);
        $wynik2 = 1 - (1 + ($oprocentowanie / 100)) ** ($liczbaRat * -1);
        $wynik = round($wynik1 / $wynik2, 2);
    }
}

$kredyt = null;
$oprocentowanie = null;
$liczbaRat = null;
$wynik = null;
$messages = array();

getParams($kredyt, $oprocentowanie, $liczbaRat);
if (validate($kredyt, $oprocentowanie, $liczbaRat, $messages)) {
    process($kredyt, $oprocentowanie, $liczbaRat, $messages, $wynik);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator rat kredytu');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_title_left','Dane');
$smarty->assign('page_title_right','Wynik');

$smarty->assign('kredyt',$kredyt);
$smarty->assign('oprocentowanie',$oprocentowanie);
$smarty->assign('liczbaRat',$liczbaRat);
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.html');
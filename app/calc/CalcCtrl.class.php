<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {

    private $messages;
    private $form;
    private $wynik;
    private $infos;

    public function __construct() {
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->wynik = new CalcResult();
    }

    public function getParams() {
        $this->form->kredyt = isset($_REQUEST ['kredyt']) ? $_REQUEST ['kredyt'] : null;
        $this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
        $this->form->liczbaRat = isset($_REQUEST ['liczbaRat']) ? $_REQUEST ['liczbaRat'] : null;
    }

    function validate() {
        if (!(isset($this->form->kredyt) && isset($this->form->oprocentowanie) && isset($this->form->liczbaRat))) {
            return false;
        }

        if ($this->form->kredyt == "") {
            $this->messages->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            $this->messages->addError('Nie podano oprocentowania');
        }
        if ($this->form->liczbaRat == "") {
            $this->messages->addError('Nie podano liczby rat');
        }

        if ($this->form->kredyt <= 0 && $this->form->kredyt != "") {
            $this->messages->addError('Kwota kredytu nie może być mniejsza lub równa 0');
        }
        if (($this->form->oprocentowanie < 0 || $this->form->oprocentowanie > 20) && $this->form->oprocentowanie != "") {
            $this->messages->addError('Kredyt nie może mieć oprocentowania poniżej 0% lub powyżej 20%');
        }
        if ($this->form->liczbaRat <= 0 && $this->form->liczbaRat != "") {
            $this->messages->addError('Kredyt nie może mieć mniejszej liczby rat niż 1');
        }

        return !$this->messages->isError();
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            $this->form->kredyt = doubleval($this->form->kredyt);
            $this->form->oprocentowanie = doubleval($this->form->oprocentowanie);
            $this->form->liczbaRat = intval($this->form->liczbaRat);

            if ($this->form->oprocentowanie == 0) {
                $wynik = $this->form->kredyt / $this->form->liczbaRat;
            } else {
                $this->wynik->wynik = round(($this->form->kredyt * ($this->form->oprocentowanie / 100)) / (1 - (1 + ($this->form->oprocentowanie / 100)) ** ($this->form->liczbaRat * -1)), 2);
            }

            $this->messages->addInfo('Wykonano obliczenia');
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('page_title', 'Kalkulator rat kredytu');
        $smarty->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        $smarty->assign('page_title_left', 'Dane');
        $smarty->assign('page_title_right', 'Wynik');

        $smarty->assign('form', $this->form);
        $smarty->assign('wynik', $this->wynik);
        $smarty->assign('messages', $this->messages);

        $smarty->display($conf->root_path . '/app/calc/CalcView.tpl');
    }

}

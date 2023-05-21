<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $wynik;

    public function __construct() {
        $this->form = new CalcForm();
        $this->wynik = new CalcResult();
    }

    public function getParams() {
        $this->form->kredyt = getFromRequest('kredyt');
        $this->form->oprocentowanie = getFromRequest('oprocentowanie');
        if (inRole('admin')) {
            $this->form->liczbaRat = getFromRequest('liczbaRat');
        } else {
            getMessages()->addError("Pole 'liczba rat' wypełnić może tylko administrator");
        }
    }

    function validate() {
        if (!(isset($this->form->kredyt) && isset($this->form->oprocentowanie) && isset($this->form->liczbaRat))) {
            return false;
        }

        if ($this->form->kredyt == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if ($this->form->liczbaRat == "") {
            getMessages()->addError('Nie podano liczby rat');
        }

        if ($this->form->kredyt <= 0 && $this->form->kredyt != "") {
            getMessages()->addError('Kwota kredytu nie może być mniejsza lub równa 0');
        }
        if (($this->form->oprocentowanie < 0 || $this->form->oprocentowanie > 20) && $this->form->oprocentowanie != "") {
            getMessages()->addError('Kredyt nie może mieć oprocentowania poniżej 0% lub powyżej 20%');
        }
        if ($this->form->liczbaRat <= 0 && $this->form->liczbaRat != "") {
            getMessages()->addError('Kredyt nie może mieć mniejszej liczby rat niż 1');
        }

        return !getMessages()->isError();
    }

    public function action_calcCompute() {
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

            getMessages()->addInfo('Wykonano obliczenia');

            $this->action_newResut();
        }

        $this->generateView();
    }

    public function action_calcShow() {
        getMessages()->addInfo('Wpisz dane w formularzu po lewej');
        $this->generateView();
    }

    public function action_newResut() {
        getDB()->insert("results", [
            "installment" => $this->form->liczbaRat,
            "interest" => $this->form->oprocentowanie,
            "amount" => $this->form->kredyt,
            "result" => $this->wynik->wynik
        ]);
    }

    public function generateView() {


        getSmarty()->assign('page_title', 'Kalkulator rat kredytu');
        getSmarty()->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        getSmarty()->assign('page_title_left', 'Dane');
        getSmarty()->assign('page_title_right', 'Wynik');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('wynik', $this->wynik);
        getSmarty()->assign('user', unserialize($_SESSION['user']));

        getSmarty()->display('CalcView.tpl');
    }

}

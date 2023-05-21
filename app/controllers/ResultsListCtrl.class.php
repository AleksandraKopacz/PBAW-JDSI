<?php

namespace app\controllers;

use app\forms\ResultsSearchForm;
use PDOException;

class ResultsListCtrl {

    private $records;
    private $form;

    public function __construct() {
        $this->form = new ResultsSearchForm();
    }

    public function action_resultsList() {

        $search_params = [];
        if (isset($this->form->result) && strlen($this->form->result) > 0) {
            $search_params['result[~]'] = $this->form->result . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "result";

        try {
            $this->records = getDB()->select("results", [
                "amount",
                "interest",
                "installment",
                "result",
            ], $where);
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug)
                getMessages()->addError($e->getMessage());
        }

        getSmarty()->assign('searchForm', $this->form);
        getSmarty()->assign('results', $this->records);
        getSmarty()->assign('page_title', 'Kalkulator rat kredytu');
        getSmarty()->assign('page_title_top', 'Poprzednie wyniki');
        getSmarty()->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        getSmarty()->display('ResultsList.tpl');
    }

}

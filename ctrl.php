<?php

require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('resultsList', 'ResultsListCtrl');
getRouter()->addRoute('calcShow', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);

getRouter()->go();

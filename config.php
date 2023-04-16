<?php
require_once 'Config.class.php';

error_reporting(E_ALL ^ E_WARNING);

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Zadanie_5';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/app/ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;
?>
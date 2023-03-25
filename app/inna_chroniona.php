<?php
require_once dirname(__FILE__) . '/../config.php';
include _ROOT_PATH . '/app/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Chroniona strona</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    </head>
    <body>

        <div style="width:90%; margin: 2em 4em;">
            <a style="background-color: #FFB9C5;" href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Kolejna chroniona strona</a>
            <a style="background-color: #FF748C;" href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
        </div>

        <div style="width:90%; margin: 2em auto;">
            <p>To jest inna chroniona strona aplikacji internetowej</p>
        </div>	

    </body>
</html>
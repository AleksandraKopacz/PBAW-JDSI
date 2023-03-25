<?php ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Kalkulator</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    </head>
    <body>
        <div style="width:90%; margin: 2em 4em;">
            <a style="background-color: #FFB9C5;" href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Kolejna chroniona strona</a>
            <a style="background-color: #FF748C;" href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
        </div>

        <div style="width:90%; margin: 2em;">
            <form class="pure-form pure-form-aligned" action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
                <!-- kwota kredytu -->
                <div class="pure-control-group">
                    <label for="id_kredyt">Kwota kredytu</label>
                    <input id="id_kredyt" type="number" name="kredyt" step="0.01" value="<?php
if (isset($kredyt)) {
    print($kredyt);
}
?>" /><br />
                </div>
                <!-- oprocentowanie -->
                <div class="pure-control-group">
                    <label for="id_oprocentowanie">Oprocentowanie</label>
                    <input id="id_oprocentowanie" type="number" name="oprocentowanie" step="0.01" value="<?php
                    if (isset($oprocentowanie)) {
                        print($oprocentowanie);
                    }
?>" /><br />
                </div>
                <!-- liczba rat -->
                <div class="pure-control-group">
                    <label for="id_liczbaRat">Liczba rat</label>
                    <input id="id_liczbaRat" type="number" name="liczbaRat" value="<?php
                    if (isset($liczbaRat)) {
                        print($liczbaRat);
                    }
?>" /><br />
                </div>
                <div class="pure-controls">
                    <button style="background-color: #FF748C;" class="pure-button" type="submit">Oblicz</button>
                </div>
            </form>	

<?php
//lista błędów
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ol style="margin: 20px; margin-left: 2em; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #FF748C; width: 350px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
}
?>
            <?php if (isset($wynik)) { ?>
                <div style="margin: 20px; margin-left: 2em; padding: 10px; border-radius: 5px; background-color: #FFB9C5; width: 350px;">
                <?php echo 'Wynik: ' . $wynik; ?>
                </div>
                <?php } ?>
        </div>
    </body>
</html>
{extends file="main.html"}

{block name=content_left}
<form class="pure-form pure-form-aligned" action="{$conf->action_root}login" method="post">
    <!-- login -->
    <div class="pure-control-group">
        <label for="id_login">Nazwa użytkownika</label>
        <input id="id_login" type="text" name="login" /><br />
    </div>
    <!-- hasło -->
    <div class="pure-control-group">
        <label for="id_pass">Hasło</label>
        <input id="id_pass" type="password" name="pass" /><br />
    </div>
    <div class="pure-controls">
        <button class="pure-button" style="background-color: #f7ccd5;" type="submit">Zaloguj</button>
    </div>
</form>
{/block}

{block name=content_right}

{include file='messages.tpl'}

{/block}

{block name=navbar}
<li><a href="{$conf->app_url}">Zaloguj się</a></li>
{/block}
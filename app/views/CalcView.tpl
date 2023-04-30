{extends file="main.html"}

{block name=content_left}
<form class="pure-form pure-form-aligned" action="{$conf->action_root}calcCompute" method="post">
    <!-- kwota kredytu -->
    <div class="pure-control-group">
        <label for="kredyt">Kwota kredytu</label>
        <input id="kredyt" type="number" name="kredyt" step="0.01" value="{$form->kredyt}" /><br />
    </div>
    <!-- oprocentowanie -->
    <div class="pure-control-group">
        <label for="oprocentowanie">Oprocentowanie</label>
        <input id="oprocentowanie" type="number" name="oprocentowanie" step="0.01" value="{$form->oprocentowanie}" /><br />
    </div>
    <!-- liczba rat -->
    <div class="pure-control-group">
        <label for="liczbaRat">Liczba rat</label>
        <input id="liczbaRat" type="number" name="liczbaRat" value="{$form->liczbaRat}" /><br />
    </div>
    <div class="pure-controls">
        <button class="pure-button" style="background-color: #f7ccd5;" type="submit">Oblicz</button>
    </div>
</form>
{/block}

{block name=content_right}
{if $msgs->isError()}
    <ol>
    {foreach $msgs->getErrors() as $err}
    {strip}
    <li>{$err}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}

{if isset($wynik->wynik)}
    <h4>{$wynik->wynik}</h4>
{/if}

{if $msgs->isInfo()}
    <ol>
    {foreach $msgs->getInfos() as  $info}
    {strip}
    <li>{$info}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}
{/block}

{block name=navbar}
<li><a href="{$conf->app_url}">Kalkulator</a></li>
{/block}


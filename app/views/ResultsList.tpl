{extends file="list.html"}

{block name=content}
    
    <table id="tab_results" class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Kwota kredytu</th>
                <th>Oprocentowanie</th>
                <th>Liczba rat</th>
                <th>Wynik</th>
            </tr>
        </thead>
        <tbody>
            {foreach $results as $r}
                {strip}
                    <tr>
                        <td>{$r["amount"]}</td>
                        <td>{$r["interest"]}</td>
                        <td>{$r["installment"]}</td>
                        <td>{$r["result"]}</td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>
    
{/block}

{block name=navbar}
    
<li><a href="{$conf->app_url}">Kalkulator</a></li>
<li><a href="{$conf->action_url}resultsList">Lista wyników</a></li>
<li><a href="{$conf->action_url}logout">Wyloguj</a></li>

{/block}
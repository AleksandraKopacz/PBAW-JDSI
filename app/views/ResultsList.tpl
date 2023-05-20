{extends file="list.html"}

{block name=content}
    
    <table id="tab_results" class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Wynik</th>
            </tr>
        </thead>
        <tbody>
            {foreach $results as $p}
                {strip}
                    <tr>
                        <td>{$p["result"]}</td>
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
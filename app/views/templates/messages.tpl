{if $msgs->isError()}
    <ol>
    {foreach $msgs->getErrors() as $err}
    {strip}
    <li>{$err}</li>
    {/strip}
    {/foreach}
    </ol>
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
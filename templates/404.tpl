{include file="header"}
	<p></p>
	<p>404 Page not found :(</p>
	
<p>
{if !empty($reason)}
	{$reason}
{else}
	Go bug Tyron about it, or something
{/if}
</p>
<p>
<a href="javascript:window.history.back();">Go back</a>
</p>
{include file="footer"}

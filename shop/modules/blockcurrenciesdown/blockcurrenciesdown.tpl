

<!-- Block currencies module -->

<div id="currencies_block_top">	

<form id="setCurrency" action="{$request_uri}" method="post">				

<select onchange="setCurrency(this.value);">			
{foreach from=$currencies key=k item=f_currency}				
<option  value="{$f_currency.id_currency}"{if $id_currency_cookie == $f_currency.id_currency} selected="selected"{/if}>					
{$f_currency.name}				
</option>			
{/foreach}		
</select>		

<p>			
<input type="hidden" name="id_currency" id="id_currency" value=""/>			
<input type="hidden" name="SubmitCurrency" value="" />		
</p>	

</form>
</div>

<!-- /Block currencies module -->
<script type="text/javascript" src="{$module_dir}blocklangcurr.js"></script> 

<!-- Block langcurr module --> 

<div id="currencies_lang_curr">

	



	    <form id="setLanguage" action="{$request_uri}" method="post">	
		
	    <select style="width:145px" onchange="document.location = this.options[this.selectedIndex].value">    
		{foreach from=$languages key=k item=language name="languages"}
        <option value="{$link->getLanguageLink($language.id_lang)}" {if $language.iso_code == $lang_iso} selected="selected" {/if} >{$language.name}</option>
		{/foreach}
        </select>  
		<input type="hidden" name="id_lang" id="id_lang" value=""/>	
		<input type="hidden" name="SubmitLanguage" value="" />
		</form>

 
</div>	


<!-- /Block langcurr module -->
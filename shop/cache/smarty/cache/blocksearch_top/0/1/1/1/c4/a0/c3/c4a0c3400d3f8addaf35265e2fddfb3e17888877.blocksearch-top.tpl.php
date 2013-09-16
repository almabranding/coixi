<?php /*%%SmartyHeaderCode:204301986851d6ba3de86690-97590811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a0c3400d3f8addaf35265e2fddfb3e17888877' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksearch/blocksearch-top.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
    '2b58eb497e6cd08e459beaa412bc3292f070c5bd' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1372845016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204301986851d6ba3de86690-97590811',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e8fe74389b70_39143836',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8fe74389b70_39143836')) {function content_51e8fe74389b70_39143836($_smarty_tpl) {?>
<!-- Block search module TOP -->

<div id="search_block_top">	

<form method="get" action="http://borndevelopments.com/coixi/shop/index.php?controller=search" id="searchbox">		


		
<label for="search_query_top">

<!-- image on background -->

</label>			
<input type="hidden" name="controller" value="search" />			
<input type="hidden" name="orderby" value="position" />			
<input type="hidden" name="orderway" value="desc" />	

<div class="fond-search">	

<input class="search_query" type="text" id="search_query_top" name="search_query" onfocus="javascript:if(this.value=='Buscar')this.value='';" onblur="javascript:if(this.value=='')this.value='Buscar';" value="Buscar" />
<input type="submit" name="submit_search" value="" class="buttonnier" />	
</div>



</form>

</div>

	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://borndevelopments.com/coixi/shop/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>


<!-- /Block search module TOP --><?php }} ?>
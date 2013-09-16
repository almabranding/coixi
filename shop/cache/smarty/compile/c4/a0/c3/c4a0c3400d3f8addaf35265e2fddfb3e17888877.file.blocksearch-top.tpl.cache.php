<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:17
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksearch/blocksearch-top.tpl" */ ?>
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
  ),
  'nocache_hash' => '204301986851d6ba3de86690-97590811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3dee4cb2_23005298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3dee4cb2_23005298')) {function content_51d6ba3dee4cb2_23005298($_smarty_tpl) {?>

<!-- Block search module TOP -->

<div id="search_block_top">	

<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" id="searchbox">		


		
<label for="search_query_top">

<!-- image on background -->

</label>			
<input type="hidden" name="controller" value="search" />			
<input type="hidden" name="orderby" value="position" />			
<input type="hidden" name="orderway" value="desc" />	

<div class="fond-search">	

<input class="search_query" type="text" id="search_query_top" name="search_query" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
';" value="<?php if (isset($_GET['search_query'])){?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" />
<input type="submit" name="submit_search" value="" class="buttonnier" />	
</div>



</form>

</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<!-- /Block search module TOP --><?php }} ?>
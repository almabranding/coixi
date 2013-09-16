<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55196210351d6ba3e5b22c1-03791953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be17fe60812f34c8a6a62d9119e8b44fe3aeb7c' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55196210351d6ba3e5b22c1-03791953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3e5f4bb5_29795687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3e5f4bb5_29795687')) {function content_51d6ba3e5f4bb5_29795687($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>	
</div>	

<!-- Menu -->	

<div class="sf-contener clearfix">		

<ul class="sf-menu clearfix">	
		
<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
			
<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>		
		
<li class="sf-search noBack" style="float:right">
					
<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">						
<input type="hidden" name="controller" value="search" />						
<input type="hidden" value="position" name="orderby"/>						
<input type="hidden" value="desc" name="orderway"/>						
<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />					
</form>	
			
</li>			
<?php }?>	
	
</ul>	
	
<div class="sf-right">&nbsp;</div>	

<!--/ Menu -->
<?php }?><?php }} ?>
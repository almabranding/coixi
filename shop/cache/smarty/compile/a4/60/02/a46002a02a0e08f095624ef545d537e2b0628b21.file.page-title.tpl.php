<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:49
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141494545551d3f7412c4937-70960419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46002a02a0e08f095624ef545d537e2b0628b21' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/page-title.tpl',
      1 => 1372845265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141494545551d3f7412c4937-70960419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f74130e1c3_20203934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f74130e1c3_20203934')) {function content_51d3f74130e1c3_20203934($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>
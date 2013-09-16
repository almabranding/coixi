<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:58
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164183874651d3f74acb0de6-67487905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c25144b2f02fca10de6449d80e944d7ebb19a3' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1372845689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164183874651d3f74acb0de6-67487905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f74accd379_23794060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f74accd379_23794060')) {function content_51d3f74accd379_23794060($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>
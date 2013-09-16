<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:58
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113337854151d3f74ade0a96-57819391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b921dab5366549ba5765b83b63a296b12b0bbd49' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1372845689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113337854151d3f74ade0a96-57819391',
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
  'unifunc' => 'content_51d3f74adfaa97_35297459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f74adfaa97_35297459')) {function content_51d3f74adfaa97_35297459($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
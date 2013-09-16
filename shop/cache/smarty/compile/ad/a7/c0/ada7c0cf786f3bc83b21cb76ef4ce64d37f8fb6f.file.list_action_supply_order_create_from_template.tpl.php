<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:58
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131907448851d3f74ad4c537-94926339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada7c0cf786f3bc83b21cb76ef4ce64d37f8fb6f' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1372845689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131907448851d3f74ad4c537-94926339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f74ad6dc45_18506708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f74ad6dc45_18506708')) {function content_51d3f74ad6dc45_18506708($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>
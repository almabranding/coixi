<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:56
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134655209951d3f74834a980-97136507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ceecccfa1ba9f6d9b44245bff2cbd417095b65' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1372845802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134655209951d3f74834a980-97136507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f748364998_83949439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f748364998_83949439')) {function content_51d3f748364998_83949439($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" href="#"><img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" /></a><?php }} ?>